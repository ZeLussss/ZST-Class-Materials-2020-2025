from math import *

liczbyDzielniki = []

liczbyDzielniki_1 = []
liczbyDzielniki_2 = []

def dzielniki_0( x ): 
    for i in range(1, int(x/2) + 1): 
        if x % i == 0: 
            liczbyDzielniki.append( i )
    liczbyDzielniki.append( x )

def dzielniki_1( x ): 
    for i in range( 1, int( x / 2 ) + 1 ): 
        if x % i == 0: 
            liczbyDzielniki_1.append( i )
    liczbyDzielniki_1.append( x )

def dzielniki_2( x ): 
    for i in range(1, int( x / 2 ) + 1): 
        if x % i == 0: 
            liczbyDzielniki_2.append( i )
    liczbyDzielniki_2.append( x )

def zadanie1():
    try:
        liczba = int( input( "Podaj liczbe dodatnia: " ) )
    except ValueError:
        liczba = int( input( "|Podales tekst| Podaj liczbe dodatnia: " ) ) 

    while( liczba <= 0 ):
        liczba = int( input( "|Podałeś liczbe ujemna lub 0| Podaj liczbe dodatnia: ") )

    dzielniki_0( liczba )

    lastVal = liczbyDzielniki[-1]
    liczbyDzielniki.pop()

    sum = 0
    for i in liczbyDzielniki:
        sum += i

    if( sum < lastVal ):
        print( "Liczba jest deficytowa" )
    elif( sum == lastVal ):
        print( "Liczba jest doskonała" )
    elif( sum > lastVal ):
        print( "Liczba jest nadmiarowa" )
    

def zadanie2():
    try:
        liczba1 = int( input( "Podaj liczbe1 dodatnia: " ) )
    except ValueError:
        liczba1 = int( input( "|Podales tekst| Podaj liczbe dodatnia: " ) ) 

    while( liczba1 <= 0 ):
        liczba1 = int( input( "|Podałeś liczbe ujemna lub 0| Podaj liczbe dodatnia: ") )

    try:
        liczba2 = int( input( "Podaj liczbe2 dodatnia: " ) )
    except ValueError:
        liczba2 = int( input( "|Podales tekst| Podaj liczbe dodatnia: " ) ) 

    while( liczba2 <= 0 ):
        liczba2 = int( input( "|Podałeś liczbe ujemna lub 0| Podaj liczbe dodatnia: ") )

    dzielniki_1( liczba1 )
    liczbyDzielniki_1.pop()
    dzielniki_2( liczba2 )
    liczbyDzielniki_2.pop()

    sum1 = 0
    for i in liczbyDzielniki_1:
        sum1 += i

    sum2 = 0
    for i in liczbyDzielniki_2:
        sum2 += i

    if( sum1 == liczba2 and sum2 == liczba1 ):
        print( "Liczby sa zaprzyjaźnione" )
    else:
        print( "Liczby nie są zaprzyjaźnione" )
    

    

def main():
      
    try: 
        wybor = int( input( "Wybierz numer zadania (1 albo 2): " ) )
    except ValueError:
        wybor = int( input( "|Podales tekst| Wybierz numer zadania (1 albo 2): ") )
    
    while( wybor < 1 or wybor > 2 ):
        wybor = int( input( "|Podales niepoprawna liczbe| Wybierz numer zadania (1 albo 2): " ) )

    if( wybor == 1 ):   zadanie1()
    else:               zadanie2()
    

if __name__ == "__main__":
    main()
