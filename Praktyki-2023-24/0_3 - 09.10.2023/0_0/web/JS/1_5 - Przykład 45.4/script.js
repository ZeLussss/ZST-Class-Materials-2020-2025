function przelicz()
{
    let dor = document.getElementById( "d1" ).value;
    let dz = document.getElementById( "d2" ).value;
    let dni = document.getElementById( "d3" ).value;

    if( !isNaN( dor ) && !isNaN( dz ) && !isNaN( dni ) && dor != "" && dz != "" && dni != "" )
    {
        let koszt = ( dor * 35 + dz * 25 ) * dni;

        document.getElementById( "wynik" ).innerHTML = "Dokonałeś rezerwacji na " + dni + " dni <br> dla " + dor + " dorosłych i " + dz + " dzieci. <br>Całkowity koszt noclegów wynosi " + koszt + " zł."; 
    }
}