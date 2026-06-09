function zadanie1()
{
    let idFirst = document.getElementById( "pierwszy" );
    let idThird = document.getElementById( "trzeci" );
    
    // Zamiana pierwszego tekstu
    let tekst = "JavaScript is cool!";
    idFirst.innerHTML = tekst;
    
    // Zamiana trzeciego tekstu
    tekst = "JavaScripy is the best language in the world";
    idThird.innerHTML = tekst;
    
    // Zamiana tekstu w 5 akapicie
    tekst = "JS is very friendly i easy language";
    let id_Fifth = document.getElementsByTagName( "p" )[ 4 ];
    id_Fifth.innerHTML = tekst;
}

