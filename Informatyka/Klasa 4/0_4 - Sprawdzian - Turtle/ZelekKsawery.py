import turtle
import random
import math

# Ustawienia początkowe
kursor = turtle.Turtle()
kursor.screen.title( "Ksawery Zelek" )
kursor.screen.setup( 1200, 800 )
kursor.screen.colormode( 255 )
kursor.speed( "fastest" ) # fastest

#===================================================
# Poszczególne zadania

def Zadanie_1():

    kursor.speed( "fastest" )
    
    kursor.dot( 10, "black" )

    kursor.penup()
    kursor.setx( 0 - 50 )

    kursor.pendown()
    kursor.dot( 10, "red" )

    kursor.penup()
    kursor.setx( 0 + 50 )

    kursor.pendown()
    kursor.dot( 10, "red" )

    kursor.penup()
    kursor.setx( 0 - 25 )
    kursor.sety( 0 - 45 )

    kursor.pendown()
    kursor.dot( 10, "green" )

    kursor.penup()
    kursor.setx( 0 + 25 )

    kursor.pendown()
    kursor.dot( 10, "blue" )

    kursor.penup()
    kursor.sety( 0 + 45 )

    kursor.pendown()
    kursor.dot( 10, "green" )

    kursor.penup()
    kursor.setx( 0 - 25 )
    
    kursor.pendown()
    kursor.dot( 10, "blue" )

def Zadanie_2():

    kursor.speed( "fastest" )
    
    kursor.pensize( 3 )
    kursor.color( "purple" )

    kursor.pendown()
    
    n = 0
    for i in range( 5 ):

        kursor.penup()

        kursor.setx( 0 - 300 )
        kursor.sety( 0 + 200 - ( n * 40 ) )

        kursor.pendown()

        for j in range( 10 ):

            kursor.setheading( 0 )

            kursor.left( 45 )
            kursor.forward( 40 )

            kursor.right( 90 )
            kursor.forward( 40 )

        n = n + 1

def Zadanie_3():

    kursor.speed( "fastest" )
    
    kursor.pensize( 3 )
    kursor.color( "red" )

    n = 0
    for i in range( 5 ):

        kursor.penup()
        kursor.setx( 0 - 50 + ( n * 40 ) )

        kursor.pendown()
        kursor.circle( 40 )

        n = n + 1

def Zadanie_4():

    kursor.speed( "fastest" )

    kursor.penup()
    kursor.pensize( 30 )
    
    kursor.setx( 0 - 390 )
    kursor.sety( 0 - 200 )

    r = 5
    g = 0
    b = 0
    for i in range( 26 ):
        
        kursor.color( ( r, g, b ) )

        kursor.left( 90 )

        kursor.pendown()
        kursor.forward( 400 )

        kursor.penup()
        kursor.left( 180 )

        kursor.forward( 400 )
        kursor.left( 90 )
        kursor.forward( 30 )

        r = r + 10

def Zadanie_5():

    kursor.speed( "fastest" )
    
    list = []
    for i in range( 4 ):
        list.append( random.randint( 50, 200 ) )

    sum = 0
    for i in range( 4 ):
        sum = sum + list[ i ]

    kursor.pensize( 2 )
    kursor.color( "black" )

    kursor.penup()
    kursor.sety( 0 - round( sum / 2 ) )

    for i in range( 4 ):

        kursor.setheading( 0 )

        kursor.left( 90 )

        for j in range( 4 ):

            kursor.pendown()

            kursor.forward( list[ i ] )
            kursor.left( 90 )

        kursor.forward( list[ i ] )


#===================================================
# Główny kod

print( "Zadanie 1" )
Zadanie_1()
x = input( "wpisz cokolwiek, aby przejść dalej: " )
print()
kursor.reset() # czyszczenie ekranu
kursor.setheading( 0 ) # Wymusza kierunek kursora W PRAWO

print( "Zadanie 2" )
Zadanie_2()
x = input( "wpisz cokolwiek, aby przejść dalej: " )
print()
kursor.reset() # czyszczenie ekranu
kursor.setheading( 0 ) # Wymusza kierunek kursora W PRAWO

print( "Zadanie 3" )
Zadanie_3()
x = input( "wpisz cokolwiek, aby przejść dalej: " )
print()
kursor.reset() # czyszczenie ekranu
kursor.setheading( 0 ) # Wymusza kierunek kursora W PRAWO

print( "Zadanie 4" )
Zadanie_4() # czyszczenie ekranu
x = input( "wpisz cokolwiek, aby przejść dalej: " )
print()
kursor.reset() # czyszczenie ekranu
kursor.setheading( 0 ) # Wymusza kierunek kursora W PRAWO

print( "Zadanie 5" )
print( "Kliknij w ekran, aby zakończyć działanie programu" )
Zadanie_5()
turtle.exitonclick()
