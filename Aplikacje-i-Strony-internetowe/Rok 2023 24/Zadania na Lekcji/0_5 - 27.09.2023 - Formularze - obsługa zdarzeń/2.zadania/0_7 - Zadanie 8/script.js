function oblicz( form )
{

    let where = document.getElementById( "wynik" );

    let normal = form.normal.value;
    let ulga = form.ulga.value;
    let time = form.time.value;
    
    let bigfamily;
    if( form.bigfamily.checked )
    {
        bigfamily = true;
    }
    else
    {
        bigfamily = false;
    }

    // Obliczenia
    let subTotal = 0;

    let normalPrice = 10;
    let ulgaPrice = 5;

    if( time > 4 )
    {
        subTotal += normal * 50 + ulga * 25;
    }
    else
    {
        subTotal += ( normal * normalPrice + ulga * ulgaPrice ) * time;
    }

    if( ulga > 14 )
    {
        let ile = Math.floor( ulga / 15 );

        if( time > 4 )
        {
            subTotal -= ile * 50;
        }
        else
        {
            subTotal -= ile * normalPrice;
        }
    }
    
    if( bigfamily )
    {
        subTotal *= 0.9;
    }
    
    where.innerHTML = "Całkowity koszt wstępu na basen: " + subTotal + " zł";


}