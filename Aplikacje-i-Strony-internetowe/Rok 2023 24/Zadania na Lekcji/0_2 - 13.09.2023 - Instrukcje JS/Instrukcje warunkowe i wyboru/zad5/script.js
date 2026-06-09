if( confirm( "Czy chcesz wykonać dowiedzieć się jak się wymiawia dni tygodnia po angielsku" ) )
{
    let dzien = String( prompt( "Podaj dany dzień tygodnia" ) );
    dzien = dzien.toUpperCase();

    if( dzien == "PONIEDZIAŁEK" )
    {
        document.write( "Podany dzień: Poniedziałek || odpowiednik po angielsku => Monday" );
    }
    else if( dzien == "WTOREK" )
    {
        document.write( "Podany dzień: Wtorek || odpowiednik po angielsku => Tuesday" );
    }
    else if( dzien == "ŚRODA" )
    {
        document.write( "Podany dzień: Środa || odpowiednik po angielsku => Wednesday" );
    }
    else if( dzien == "CZWARTEK" )
    {
        document.write( "Podany dzień: Czwartek || odpowiednik po angielsku => Thursday" );
    }
    else if( dzien == "PIĄTEK" )
    {
        document.write( "Podany dzień: Piątek || odpowiednik po angielsku => Friday" );
    }
    else if( dzien == "SOBOTA" )
    {
        document.write( "Podany dzień: Sobota || odpowiednik po angielsku => Saturday" );
    }
    else if( dzien == "NIEDZIELA" )
    {
        document.write( "Podany dzień: Niedziela || odpowiednik po angielsku => Sunday" );
    }
    else
    {
        document.write( "Podałeś zły dzień tygodnia" );
    }
}
else
{
    alert( "Spróbujmy następnym razem!" );
}