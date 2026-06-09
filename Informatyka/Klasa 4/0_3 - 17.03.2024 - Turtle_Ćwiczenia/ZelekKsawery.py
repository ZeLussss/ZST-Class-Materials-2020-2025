import turtle
import random 

kursor = turtle.Turtle()

kursor.screen.title( "Program do rysowania" )

# Rozdzielczość
kursor.screen.setup( 1200, 800 )

# Kolory RGB
kursor.screen.colormode( 255 )

# Przyspieszenie
kursor.speed( 'fastest' )

# -----------
# ZADANIA
# -----------

def exec1():

    NumCase = int( input( "Podaj jedną liczbę całkowitą: " ) )

    for i in range( NumCase ):
        
        wspX = random.randint( -300, 300 )
        wspY = random.randint( -200, 200 )

        kursor.penup()

        kursor.sety( wspX )
        kursor.setx( wspY )

        kursor.pendown()

        kursor.dot( 10, "red" )

    turtle.exitonclick()


def exec2():

    lenghtX = 1200
    lenghtY = 800

    wspX = -600
    wspY = 400

    kursor.color( "blue" )

    kursor.penup()

    n = 1
    for i in range( 15 ):

        kursor.setx( ( lenghtX / 2 ) * -1 ) 
        kursor.sety( ( lenghtY / 2 ) - ( n * 50 ) )

        kursor.pendown()

        kursor.forward( lenghtX )

        n = n + 1

        kursor.penup()

    n = 1
    kursor.right( 90 )
    kursor.color( "red" )
    for i in range( 23 ):

        kursor.setx( ( ( lenghtX / 2 ) * -1 ) + ( n * 50 ) )
        kursor.sety( ( lenghtY / 2 ) )

        kursor.pendown()

        kursor.forward( lenghtY )

        n = n + 1

        kursor.penup()


def exec3():

    kursor.penup()
    kursor.setx( 0 - 300 )
    kursor.sety( 0 + 50 )

    kursor.pensize( 5 )

    kursor.pendown()
    kursor.color( "blue" )
    kursor.circle( 50 )

    kursor.penup()
    kursor.setx( 0 - 240 )
    kursor.sety( 0 + 10 )

    kursor.pendown()
    kursor.color( "yellow" )
    kursor.circle( 50 )

    kursor.penup()
    kursor.setx( 0 - 180 )
    kursor.sety( 0 + 50 )

    kursor.pendown()
    kursor.color( "black" )
    kursor.circle( 50 )

    kursor.penup()
    kursor.setx( 0 - 120 )
    kursor.sety( 0 + 10 )

    kursor.pendown()
    kursor.color( "green" )
    kursor.circle( 50 )

    kursor.penup()
    kursor.setx( 0 - 60 )
    kursor.sety( 0 + 50 )

    kursor.pendown()
    kursor.color( "red" )
    kursor.circle( 50 )

    
def exec4():
    
    list = []
    for i in range( 10 ):
        list.append( random.randint( 0, 600 ) )

    kursor.pensize( 15 )
    kursor.left( 90 )

    n = 0
    for i in range( 10 ):
        
        if( i % 2 == 1 ):
            kursor.pencolor( "cyan" )
        else:
            kursor.pencolor( "green" )

        kursor.penup()
        kursor.setx( ( 0 - 75 ) + ( n * 15 ) )
        kursor.sety( 0 - 300 )

        kursor.pendown()
        
        kursor.forward( list[ i ] )

        kursor.penup()
        n = n + 1


def exec5():

    while( True ):
        x = random.randint( 1, 3 )

        kursor.color( "green" )

        if( x == 1 ):
            kursor.left( 90 )
        elif( x == 3 ):
            kursor.right( 90 )

        kursor.forward( 25 )


zadanie = int( input( "Wybierz numer zadania [1-5]: " ) )

if( zadanie == 1 ):
    exec1()
    turtle.exitonclick()

elif( zadanie == 2 ):
    exec2()
    turtle.exitonclick()

elif( zadanie == 3 ):
    exec3()
    turtle.exitonclick()

elif( zadanie == 4 ):
    exec4()
    turtle.exitonclick()

elif( zadanie == 5 ):
    exec5()
    turtle.exitonclick()

else:
    print( "NIE MA TAKIEGO ZADANIA" )
