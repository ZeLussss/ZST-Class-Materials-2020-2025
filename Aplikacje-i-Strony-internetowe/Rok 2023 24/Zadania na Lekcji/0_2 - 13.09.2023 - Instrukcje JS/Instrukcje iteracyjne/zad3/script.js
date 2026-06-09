if( confirm( "Czy chcesz wykonać " ) )
{
    document.write( "<table class=\"wazne\">" );

    for( let i = 0; i < 30; i++)
    {
        document.write( "<tr>" );

        for( let j = 0; j < 10; j++ )
        {
            let a = Math.floor( Math.random() * 1000 + 1 );
            
            if( a % 3 == 0 )
            {
                document.write( "<td class=\"podz_przez_trzy\">" );
                document.write( a );
                document.write( "</td>" );
            }
            else if( a % 5 == 0 )
            {
                document.write( "<td class=\"podz_przez_piec\">" );
                document.write( a );
                document.write( "</td>" );
            }
            else
            {
                document.write( "<td>" );
                document.write( a );
                document.write( "</td>" );
            }
        }

        document.write( "</tr>" );
    }

    document.write( "</table>" );
}
else
{
    alert( "Spróbujmy następnym razem!" );
}