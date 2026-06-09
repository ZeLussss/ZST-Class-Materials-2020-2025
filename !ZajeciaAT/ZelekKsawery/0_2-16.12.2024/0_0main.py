import serial

ser = serial.Serial( 'COM14', 115200 )
s = ser.read( 100 )

while True:
    if ser.in_waiting > 0:
        tekst = ser.readline().rstrip().decode()
        print( tekst )