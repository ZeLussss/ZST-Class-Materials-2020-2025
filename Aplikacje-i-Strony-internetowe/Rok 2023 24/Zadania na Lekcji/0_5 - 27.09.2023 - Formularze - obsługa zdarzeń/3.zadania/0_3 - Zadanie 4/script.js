function calculate()
{
    let where = document.getElementById( "wynik" );

    let typ = document.getElementsByName( "typ" );
    let ile = typ.length;

    let typy = new Array();

    let typValue = "";
    for( let i = 0; i < ile; i++ )
    {
        if( typ[ i ].checked )
        {
            typy.push( typ[ i ].value );    
        }
    }

    console.log( typy );

    // Obliczanie
    ile = typy.length;
    let wynik = 0;

    for( let i = 0; i < ile; i++ )
    {
        if( typy[ i ] == "Piling" )
        {
            wynik += 45;
        }
        else if( typy[ i ] == "Maska" )
        {
            wynik += 30;
        }
        else if( typy[ i ] == "Masaż" )
        {
            wynik += 20;
        }
        else if( typy[ i ] == "Regulacja" )
        {
            wynik += 5;
        }
    }

    where.innerHTML = "Cena zabiegów: " + wynik + " zł";
}