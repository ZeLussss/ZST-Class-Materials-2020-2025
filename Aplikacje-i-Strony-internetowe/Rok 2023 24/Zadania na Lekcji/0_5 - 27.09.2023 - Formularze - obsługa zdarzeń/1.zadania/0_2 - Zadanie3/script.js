function oblicz( form1 )
{
    let liczbDoros = Number( form1.liczbDoros.value );
    let liczbDziec = Number( form1.liczbDziec.value );
    let liczbDni = Number( form1.liczbDni.value );
    
    if( ( liczbDoros != null && isNaN( liczbDoros ) == false ) && ( liczbDziec != null && isNaN( liczbDziec ) == false ) && ( liczbDni != null && isNaN( liczbDni ) == false ) )
    {
        let x = document.getElementById( "tu" );

        let wynik = ( ( 35 * liczbDoros ) * liczbDni ) + ( ( 25 * liczbDziec ) * liczbDni );
        x.innerHTML = wynik + " zł";
    }
    else
    {
        let x = document.getElementById( "tu" );
        x.innerHTML = "Podano złe dane";
    }
}