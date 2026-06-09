import turtle;

cursor = turtle.Turtle()

cursor.screen.title = "Jakiś samochód"

cursor.screen.setup( 1200, 800 )


#rysowanie

val = 0
forw = 10
kat = 1

for i in range( 85 ):
    cursor.screen.colormode( val )
    cursor.forward( forw )
    cursor.left( kat )

    val = val + 3;
    forw = forw + 5
    kat = kat + 3

