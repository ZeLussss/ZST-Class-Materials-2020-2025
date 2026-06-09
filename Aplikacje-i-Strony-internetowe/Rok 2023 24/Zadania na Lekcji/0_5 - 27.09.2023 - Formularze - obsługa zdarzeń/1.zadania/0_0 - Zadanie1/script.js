function powitanie( form1 )
{
    if( form1.imie.value == "" && form1.nazwisko.value == "" )
    {
        document.write( "Nie podałeś imienia i nazwiska <br>")
    }
    else if( form1.imie.value == "" )
    {
        document.write( "Nie podałeś imienia." );
    }
    else if( form1.nazwisko.value == "" )
    {
        document.write( "Nie podałeś nazwiska" );
    }
    else
    {
        document.write( "Witaj " + form1.imie.value + " " + form1.nazwisko.value + "<br>" );
        
        if( form1.dzien.value == "" || form1.miesiac.value == "" || form1.rok.value == "" )
        {
            document.write( "Nie podałeś daty urodzin" );
        }
        else
        {
            document.write( "Urodziłeś się dnia " + form1.dzien.value + " " + form1.miesiac.value + " " + form1.rok.value );
        }
    }
}