for( let i = 0; i <= 2; i++ )
{
    let a = Math.floor( Math.random() * 20 + 1 );

    let name = "";
    if( a < 10 && a > 0 )
    {
        name += "rys0" + a + ".png";
        document.write( "<img src=\"" + name + "\">" + "</img>" );
        document.write( "<br>" );
    }
    else if( a > 9 && a < 21 )
    {
        name += "rys" + a + ".png";
        document.write( "<img src=\"" + name + "\">" + "</img>" );
        document.write( "<br>" );
    }
}


