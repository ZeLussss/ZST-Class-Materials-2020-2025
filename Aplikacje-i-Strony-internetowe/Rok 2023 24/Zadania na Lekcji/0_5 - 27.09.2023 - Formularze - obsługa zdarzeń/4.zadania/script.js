function howMany( num )
{
    const where = document.getElementById( "howManyLetters" );

    where.innerHTML = "Zostało znaków: " + ( 20 - num );

    where.style.fontSize = "80%";
    where.style.textAlign = "left";

    console.log( 0 );
}

let komunikat = '';

function potwierdz( form )
{
    let where = document.getElementById( "wynik" );

    komunikat = '';

    // Pole Lista mailowa
    komunikat += "<div id='list'> <span id='text'>Lista mailowa</span> </div>";

    komunikat += "<div id='cont'>";

    // Email
    let email = document.getElementById( "emailInput" ).value

    if( email == '' )
    {
        komunikat += "<span style='color: darkcyan; font-weight: bold;'>Adres e-mail: </span>" + "<span style='color: #160a6e; font-weight: bold;'>Nie podano</span> <br>";
    }
    else
    {
        komunikat += "<span style='color: darkcyan; font-weight: bold;'>Adres e-mail: </span>" + "<span style='color: #160a6e; font-weight: bold;'>" + email + "</span> <br>";
    }



    // Newsteller
    let newsteler;

    if( document.getElementById( "newstelerInput" ).checked )
    {
        newsteler = "Tak";
    } 
    else
    {
        newsteler = "Nie";
    }
    
    komunikat += "<span style='color: darkcyan; font-weight: bold;'>Zapisać na listę mailową? </span>" + "<span style='color: #160a6e; font-weight: bold;'>" + newsteler + "</span> <br>";


    // Zgoda
    let zgoda;
    if( document.getElementById( "daneInput" ).checked )
    {
        zgoda = "Wyrażam zgodę na przetwarzanie danych osobowych";
    }
    else
    {
        zgoda = "Nie wyrażam zgody na przetwarzanie danych osobowych";
    }
    komunikat += "<span style='color: darkcyan; font-weight: bold;'>Zgoda: </span>" + "<span style='color: #160a6e; font-weight: bold;'>" + zgoda + "</span> <br>";


    // Zainteresowania
    let checkboxes = document.getElementsByName( "Interests" );
    let ile = checkboxes.length;

    let txtZainteresowania = '';
    for( let i = 0; i < ile; i++ )
    {
        if( checkboxes[ i ].checked )
        {
            txtZainteresowania += checkboxes[ i ].value + ", ";
        }
    }

    if( txtZainteresowania == '' )
    {
        txtZainteresowania = "Brak";
    }
    else
    {
        txtZainteresowania = txtZainteresowania.slice( 0, -2 );
        txtZainteresowania += ".";
    }

    komunikat += "<span style='color: darkcyan; font-weight: bold;'>Zainteresowania: </span>" + "<span style='color: #160a6e; font-weight: bold;'>" + txtZainteresowania + "</span> <br>";


    // Komentarz
    let Komentarz = document.getElementById( "message" ).value;

    if( Komentarz == '' )
    {
        komunikat += "<span style='color: darkcyan; font-weight: bold;'>Komentarz: </span>" + "<span style='color: #160a6e; font-weight: bold;'>Brak</span> <br>";
    }
    else
    {
        komunikat += "<span style='color: darkcyan; font-weight: bold;'>Komentarz: </span>" + "<span style='color: #160a6e; font-weight: bold;'>" + document.getElementById( "message" ).value + "</span> <br>";
    }

    komunikat += "</div>";


    where.innerHTML = komunikat;

    document.forms[ "form" ].submit();
}

function resetuj( form )
{
    komunikat = '';

    komunikat += "<div id='cont'>"

    komunikat += "<span style='color: red; text-weight: bold;'>Dane zostały wyczyszczone <br>"

    komunikat += "</div>"

    const where = document.getElementById( "howManyLetters" );
    where.innerHTML = '';

    document.getElementById( "wynik" ).innerHTML = komunikat;

    document.forms[ "form" ].reset();
}

function zmiana_1()
{
    document.body.style.backgroundColor = "darkred";
    document.body.style.color = "white";
}

function zmiana_2()
{
    document.body.style.backgroundColor = "yellow";
    document.body.style.color = "blue";
}