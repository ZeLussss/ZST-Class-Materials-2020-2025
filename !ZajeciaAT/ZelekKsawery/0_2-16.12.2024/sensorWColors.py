import pygame
import serial

ser = serial.Serial( 'COM14', 115200 )
s = ser.read( 100 )
    
pygame.init()

BLACK = ( 0, 0, 0 )
WHITE = ( 255, 255, 255 )
BLUE = ( 0, 0, 255 )
GREEN = ( 0, 255, 0 )
RED = ( 255, 0, 0 )
PURPLE = ( 154, 0, 255 )
YELLOW = ( 239, 255, 0 )
CYAN = ( 0, 255, 255 )

size = ( 256, 256 )
screen = pygame.display.set_mode( size )

pygame.display.set_caption( "Pixels" )

done = False
clock = pygame.time.Clock()

while not done:

    tekst = ''
    if ser.in_waiting > 0:
        tekst = ser.readline().rstrip().decode()
        print( tekst )

    # Split the data by spaces and remove any extra whitespace
    tekst_values = tekst.split()
    
    # Convert to integers
    pixel_values = []
    for value in tekst_values:
        try:
            pixel_values.append(int(value))  # Convert to integer
        except ValueError:
            # print(f"Skipping invalid value: {value}")  # Handle invalid conversion
            continue
    
    # Make sure we have exactly 64 values for the 8x8 grid
    if len(pixel_values) != 64:
        # print("Not enough data for a full 8x8 grid.")
        continue

    # Reshape the pixel values into an 8x8 grid
    pixel_values_8x8 = [pixel_values[i:i+8] for i in range(0, 64, 8)]
    # print( pixel_values_8x8 )

    for i in pixel_values_8x8:
        print( i )
        print( '-' )


    for event in pygame.event.get():
        if event.type == pygame.QUIT:
            done = True

    screen.fill( WHITE )

    # pygame.draw.rect( screen, BLACK, [ 0, 0, 1, 1 ], 1 )
    surface = pygame.Surface( ( 8, 8 ) )

    for i in range( 0, 8 ):
        surface.set_at( [ i, 0 ], BLACK )
        surface.set_at( [ i, 1 ], WHITE )
        surface.set_at( [ i, 2 ], BLUE )
        surface.set_at( [ i, 3 ], GREEN )
        surface.set_at( [ i, 4 ], RED )
        surface.set_at( [ i, 5 ], PURPLE )
        surface.set_at( [ i, 6 ], YELLOW )
        surface.set_at( [ i, 7 ], CYAN )

    surface = pygame.transform.scale( surface, ( 256, 256 ) )
    screen.blit( surface, ( 0, 0 ) )

    pygame.display.flip()

    clock.tick( 60 )

pygame.quit()