import pygame
import serial
import time

# Initialize serial connection (update the port if needed)
ser = serial.Serial('COM14', 115200)

# Initialize pygame
pygame.init()

# Define screen settings
size = (256, 256)
screen = pygame.display.set_mode(size)
pygame.display.set_caption("8x8 Grid with Red Color Based on Sensor Values")

done = False
clock = pygame.time.Clock()

# Define the scale function (0 is the closest, 255 is the furthest)
def scale_value(value, min_value=0, max_value=3000):
    """
    Scale a sensor value (e.g., distance) to a color intensity value between 0 and 255.
    0 is the closest distance (max intensity), 255 is the furthest distance (min intensity).
    """
    if value <= min_value:
        return 255  # Closest, set to full intensity (bright red)
    elif value >= max_value:
        return 0  # Furthest, set to low intensity (dark red)
    
    # Normalize the value between 0 and 255
    scaled_value = int((value - min_value) / (max_value - min_value) * 255)
    return scaled_value

# Function to process and render the data as an 8x8 grid
def process_data_and_render(data):
    """ Process the incoming data into 8x8 pixel values and render them on the screen """
    # Split data into individual values
    values = data.split()  # Split the string into a list of values
    
    pixel_values = []
    
    # Convert each value to integer and handle invalid values
    for value in values:
        try:
            pixel_values.append(int(value))  # Convert to integer
        except ValueError:
            print(f"Skipping invalid value: {value}")  # Skip invalid values
            continue
    
    # Check if we have enough data for the 8x8 grid (64 values)
    if len(pixel_values) >= 64:
        pixel_values = pixel_values[:64]  # Take the first 64 values

        # Reshape the pixel values into an 8x8 grid
        pixel_values_8x8 = [pixel_values[i:i+8] for i in range(0, 64, 8)]

        # Create a surface to render the 8x8 grid
        surface = pygame.Surface((8, 8))

        for y in range(8):
            for x in range(8):
                # Get the scaled intensity for the pixel at (x, y)
                scaled_value = scale_value(pixel_values_8x8[y][x])
                
                # Set the pixel color to red with intensity based on the scaled value
                color = (scaled_value, 0, 0)  # RGB, only the red channel varies
                surface.set_at((x, y), color)

        # Scale the 8x8 grid to fit the display (256x256)
        surface = pygame.transform.scale(surface, (256, 256))

        # Blit the surface to the screen (display it)
        screen.blit(surface, (0, 0))

        # Print the 8x8 grid of scaled values to the console for debugging
        print("\nScaled 8x8 Pixel Values (0 - 255):")
        for row in pixel_values_8x8:
            print("\t".join(f"{scale_value(val):3}" for val in row))

# Event handling for Pygame
while not done:
    try:
        # Read the sensor data (adjust size based on your sensor rate)
        data = ser.read(1000)  # You might need to adjust this depending on your sensor
        data_str = data.decode('utf-8', errors='ignore').strip()  # Decode and clean up the data
        
        if data_str:  # If data was received
            process_data_and_render(data_str)  # Process the data and render the 8x8 grid
        
    except UnicodeDecodeError as e:
        print(f"Error decoding data: {e}")
        continue  # Skip this loop iteration and wait for the next data

    # Event handling (for closing the window)
    for event in pygame.event.get():
        if event.type == pygame.QUIT:
            done = True

    # Update the display
    pygame.display.flip()

    # Control the frame rate (60 FPS)
    clock.tick(60)

# Quit pygame
pygame.quit()
