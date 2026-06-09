function obliczKoszt() 
{
    let iloscPlyt = document.getElementById('iloscPlyt').value;
    let cena = 2;
    let koszt = iloscPlyt * cena;
    
    if (document.getElementById( 'opakowanieSlim' ).checked) 
    {
        koszt = koszt * 1.5;
    }

    // Sprawdź czy element jest NaN
    if ( isNaN(koszt) ) 
    {
        koszt = String( 'Nieprawidłowa wartość' );
        document.getElementById( 'wynik' ).innerHTML = koszt;
    }
    else
    {
        document.getElementById('wynik').innerHTML = 'Całkowity koszt zakupu płyt CD/DVD: ' + koszt + ' zł';
    }
}