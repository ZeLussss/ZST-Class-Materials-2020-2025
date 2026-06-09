if( confirm( "Czy chcesz wykonać funkcję pokazującą wartości funkcji sinus?" ) )
{
    document.write( "<table class=\"wazne\">")

    document.write( "<tr> <th>kąt</th> <th>sin</th> <th>cos</th> <th>tg</th> <th>ctg</th> </tr>" );

    for( let kat = 0; kat <= 720; )
    {
        let sin = Math.sin( kat );
        let cos = Math.sin( kat );
        let tg = Math.tan( kat );
        let ctg = 1 / tg;

        document.write( "<tr> <td>" + kat + "<td>" + sin + "</td> <td>" + cos + "</td> <td>" + tg + "</td> <td>" + ctg + "</td></tr>" );
        console.log( kat, sin, cos, tg, ctg );

        kat += 5;
    }

    document.write( "</table>" );
}
else
{
    alert( "Spróbujmy następnym razem!" );
}