import random

#tworzenie tablicy wielowymiarowej potrzebnej do zadania 1 i 2
main_tab = []

for i in range( 12 ):
    add_tab = []

    for j in range( 16 ):
        add_tab.append( random.randint( 0, 25 ) )

    main_tab.append( add_tab )

#zadanie 1
def zad1():
    for i in range( 12 ):
        for j in range( 16 ):
            val = main_tab[ i ][ j ]
            val = str( val )
            val = val.rjust( 3, " " )
            print( val, end = " " )
        print()

#zadanie 2
def zad2():

    #ogólnie
    minimumOgolne = main_tab[ 0 ][ 0 ]
    maksimumOgolne = main_tab[ 0 ][ 0 ]
    sumaOgolna = 0
    sredniaOgolna = 0

    #Kolumny
    for i in range( 16 ):
        minimum = main_tab[ 0 ][ i ]
        maksimum = main_tab[ 0 ][ i ]
        suma = 0
        srednia = 0

        for j in range( 1, 12 ):
            if( minimum > main_tab[ j ][ i ] ):
                minimum = main_tab[ j ][ i ]

            if( maksimum < main_tab[ j ][ i ] ):
                maksimum = main_tab[ j ][ i ]

            if( minimumOgolne > main_tab[ j ][ i ] ):
                minimumOgolne = main_tab[ j ][ i ]

            if( maksimumOgolne < main_tab[ j ][ i ] ):
                maksimumOgolne = main_tab[ j ][ i ]

            sumaOgolna += main_tab[ j ][ i ]

        print( "KOLUMNA ", i + 1 )
        print( "Najmniejsza wartosc w kolumnie: ", minimum )
        print( "Najwieksza wartosc w kolumnie: ", maksimum )
        print( "Suma wartosci: ", suma )
        print( "Srednia wartosci: ", ( suma / 16 ) )
        print()

    #Wiersze
    for i in range( 12 ):
        minimum = main_tab[ i ][ 0 ]
        maksimum = main_tab[ 1 ][ 0 ]
        suma = 0
        srednia = 0

        for j in range( 1, 16 ):
            if( minimum > main_tab[ i ][ j ] ):
                minimum = main_tab[ i ][ j ]

            if( maksimum < main_tab[ i ][ j ] ):
                maksimum = main_tab[ i ][ j ]

            suma += main_tab[ i ][ j ]

            if( minimumOgolne > main_tab[ i ][ j ] ):
                minimumOgolne = main_tab[ i ][ j ]

            if( maksimumOgolne < main_tab[ i ][ j ] ):
                maksimumOgolne = main_tab[ i ][ j ]

            sumaOgolna += main_tab[ i ][ j ]

        print( "WIERSZ ", i + 1 )
        print( "Najmniejsza wartosc w wierszu: ", minimum )
        print( "Najwieksza wartosc w wierszu: ", maksimum )
        print( "Suma wartosci: ", suma )
        print( "Srednia wartosci: ", ( suma / 16 ) )
        print()

    print( "OGOLNE PODSUMPOWANIE: " )
    print( "Najmniejsza wartosc w tablicy: ", minimumOgolne )
    print( "Najwieksza wartosc w tablicy: ", maksimumOgolne )
    print( "Suma ogolna: ", sumaOgolna )
    print( "Srednia ogolna: ", ( sumaOgolna / ( 12 * 16 ) ) )
    print()

def zad3():
    liczba = int( input( "Podaj liczbe: " ) )
    wspLiczb = []
    liczbaWystapien = 0

    for i in range( 12 ):
        for j in range( 16 ):
            if( main_tab[ i ][ j ] == liczba ):
                tabPom = [ i, j ]
                wspLiczb.append( tabPom )
                liczbaWystapien += 1

    print( "Podana liczba: ", liczba )
    print( "Liczba wystapien: ", liczbaWystapien )
    
    if( len( wspLiczb ) != 0 ):
        print( "Wspolrzedne wystepowania liczb: " )
        for i in wspLiczb:
            print( i )  

    for i in range( 12 ):
        for j in range( 16 ):
            val = main_tab[ i ][ j ]
            val = str( val )
            val = val.rjust( 3, " " )
            print( val, end = " " )
        print()

        
wybor = int( input( "Wybierz numer zadania [1 - 3]: " ) )

while( wybor < 1 or wybor > 3 ):
    wybor = int( input( "|Poza zakresem| Podaj numer zadania [1 - 3]: " ) )

if( wybor == 1 ): zad1()
elif( wybor == 2 ): zad2()
elif( wybor == 3 ): zad3()