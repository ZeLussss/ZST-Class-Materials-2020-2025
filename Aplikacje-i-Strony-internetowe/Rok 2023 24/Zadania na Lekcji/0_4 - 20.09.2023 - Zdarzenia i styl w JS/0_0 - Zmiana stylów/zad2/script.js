function zadanie2()
{
    const id_Imie = document.querySelector('#imie');
    let imie;

    id_Imie.addEventListener('click', () => {
        do
        {
            imie = prompt( "Podaj swoje imie" );
        } while ( imie === null && imie === "" );
        
        if( imie != null && imie != "" )
        {
            document.write( "<h4>Cześć " + imie + ". Witaj na mojej stronie!</h4>" );
        }
        else
        {
            alert( "Nie podałeś imienia" )
        }
    });
}