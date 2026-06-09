function osoba_prywatna( value )
{
    let tr_w_firma_xxx = document.getElementById( "firma_xxx" );
    let td_w_input_firma = document.getElementById( "firma" );

    if( value == 2 )
    {
        tr_w_firma_xxx.classList.add( "not_avaiable" );

        td_w_input_firma.disabled = true;
    }
    else if( value == 1 )
    {
        tr_w_firma_xxx.setAttribute( "class", "" );

        td_w_input_firma.disabled = false;
    }
}