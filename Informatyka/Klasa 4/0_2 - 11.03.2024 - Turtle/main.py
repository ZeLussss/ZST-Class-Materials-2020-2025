

cursor = turtle.Turtle()

cursor.screen.title = "Jakiś samochód"

cursor.screen.setup( 1200, 800 )


#Rysowanie

cursor.speed( "fast" )

cursor.penup()
cursor.forward( 300 )

cursor.pendown()

for i in range( 360 ):
    cursor.forward( 1 )
    cursor.left( 1 )

cursor.penup()

cursor.right( 90 )

cursor.forward( 50 )

cursor.left( 90 )

cursor.pendown()

cursor.pencolor( "red" )

cursor.forward( 75 )

cursor.left( 90 )

cursor.forward( 200 )

cursor.left( 90 )

cursor.forward( 150 )

cursor.left( 90 )

cursor.forward( 200 )

cursor.left( 90 )

cursor.forward( 75 )

