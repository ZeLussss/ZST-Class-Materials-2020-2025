let wybor = Math.floor( Math.random() * 2 ) + 1;
console.log( wybor );

if( wybor == 1 )
{
    // Inicjalizacja tablicy z dostępnymi wartościami
    let dost_rozmiary = [ 10, 20, 30, 40, 50, 60, 70, 80, 90, 100 ];
    let liczb_dost_rozmiarow = dost_rozmiary.length - 1;

    // Wybór rozmiaru tablicy
    wybor = Math.floor( Math.random() * liczb_dost_rozmiarow );
    
    // Stworzenie tablicy o wylosowanej długości i zapełnienie nią liczbami
    let array = new Array();

    for( let i = 0; i <= dost_rozmiary[ wybor ] - 1; i++ )
    {
        array.push( Math.floor( Math.random() * 1000 ) );
    }

    if( array.length > 0 )
    {
        document.write( "<h2> Wylosowano zadanie 9 </h2>" );
        document.write( "<h3> Rozmiar tablicy: " + dost_rozmiary[ wybor ] + " </h3>" );

        array.sort( function( a, b ) { return a - b } );
        array.reverse();

        console.log( array );

        let liczba = dost_rozmiary[ wybor ] / 5;
        let warunek = 0;

        document.write( "<table>" );

        for( let i = 0; i <= liczba - 1; i++ )
        {
            document.write( "<tr>" );

            for( let j = 0; j <= 4; j++ )
            {
                document.write( "<td>" );

                document.write( array[ warunek ] );
                warunek += 1;

                document.write( "</td>" );
            }

            document.write( "</tr>" );
        }

        document.write( "</table>" );
    }
    else
    {
        document.write( "<h1> Zadanie 9 </h1>" );
        document.write( "<h3> <b style='color: red;'> Rozmiar tablicy jest mniejszy od 0 </b> </h3>" );
    }

    console.log( array );
}
else if( wybor == 2 )
{
    // Stworzenie nowej tablicy z nazwami plików
    let nazwy = new Array();

    for( let i = 1; i <= 30; i++ )
    {
        nazwy.push( "img" + i + ".jpg" );
    }

    document.write( "<h2> Wylosowano zadanie 10 </h2>" );
    document.write( "Jeszcze nie skończyłem" );

    document.write( "<table>" );

    for( let i = 0; i <= 2; i++ )
    {
        document.write( "<tr>" );

        for( let j = 0; j <= 9; j++ )
        {
            document.write( "<td>" );

            document.write( nazwy[ i + j ] );

            document.write( "</td>" );
        }

        document.write( "</tr>" );
    }

    document.write( "</table>" );


}

