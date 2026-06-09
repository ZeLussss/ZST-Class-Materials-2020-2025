import math

def main():

    try:
        num1 = int( input( "Podaj pierwsza liczbe calkowita: " ) )
    except ValueError:
        print( "-------------------" )
        print( "To nie jest liczba calkowita, sprobuj ponownie")
        print( "-------------------" )
        exit()

    try: 
        num2 = int( input( "Podaj druga liczbe calkowita: " ) )
    except ValueError:
        print( "-------------------" )
        print( "To nie jest liczba calkowita, sprobuj ponownie")
        print( "-------------------" )
        exit()

    try:
        num3 = int( input( "Podaj trzecia liczbe calkowita: " ) )
    except ValueError:
        print( "-------------------" )
        print( "To nie jest liczba calkowita, sprobuj ponownie")
        print( "-------------------" )
        exit()

    while( True ):
        try:
            choice = int( input( "Wybierz operacje( 0-9 ): " ) )
        except ValueError:
            print( "-------------------" )
            print( "To nie jest liczba calkowita, sprobuj ponownie")
            print( "-------------------" )
            exit()
        
        while( choice < 0 or choice > 9 ):
            try:
                choice = int( input( "(BLAD) | Wybierz operacje( 0-9 ): " ) )
            except ValueError:
                print( "-------------------" )
                print( "To nie jest liczba calkowita, sprobuj ponownie")
                print( "-------------------" )
                exit()

        if( choice == 1 ):
            wynik = num1 + num2 + num3
            print( "Suma 3 liczb wynosi: ", wynik )
            print()
        
        elif( choice == 2 ):
            wynik = num1 * num2 * num3
            print( "Iloczyn 3 liczb wynosi: ", wynik )
            print()

        elif( choice == 3 ):
            wynik = num1 - num2
            print( "Roznica 1 i 2 liczby wynosi: ", wynik )
            print()

        elif( choice == 4 ):
            wynik = num2 / num3
            print( "Iloraz zwykly liczby 2 i 3 wynosi: ", wynik )
            print()

        elif( choice == 5 ):
            wynik = num3 // num1
            print( "Iloraz calkowity liczby 3 i 1 wynosi: ", wynik )
            print()

        elif( choice == 6 ):
            wynik = ( num1 + num2 + num3 ) / 3
            print( "Srednia liczb wynosi: ", wynik )
            print()

        elif( choice == 7 ):
            tab = [ num1, num2, num3 ]
            wynik = min( tab )
            print( "Najmniejsza wartosc to: ", wynik )
            print()

        elif( choice == 8 ):
            tab = [ num1, num2, num3 ]
            wynik = max( tab )
            print( "Najwieksza liczba to: ", wynik )
            print()

        elif( choice == 9 ):
            wynik = num3 % num2
            print( "Reszta z dzielenia liczb 3 i 2 to: ", wynik )
            print()

        elif( choice == 0 ):
            break
            

if __name__ == "__main__":
        main()