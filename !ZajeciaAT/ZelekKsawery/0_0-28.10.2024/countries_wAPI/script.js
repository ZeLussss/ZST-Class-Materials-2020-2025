async function getData( name )
{
    const url = "https://restcountries.com/v3.1/name/" + String( name );
    let json = "";

    try{
        const response = await fetch( url );
        if( !response.ok )
        {
            document.getElementById( "placeForName" ).innerHTML = "";
            document.getElementById( "placeForFullName" ).innerHTML = "";
            document.getElementById( "placeForContinent" ).innerHTML = "";
            document.getElementById( "placeForCapital" ).innerHTML = "";
            document.getElementById( "placeForNumberOfCitizens" ).innerHTML = "";
            document.getElementById( "placeForEmblem" ).innerHTML = "";
            document.getElementById( "placeForFlag" ).innerHTML = "";
            
            throw new Error( 'Response status: $(response.status)' );
        }
        else
        {
            json = await response.json();
            console.log( json );
        
            let nameOfCountryForWeb = json[ 0 ][ "altSpellings" ][ 1 ];
            console.log( nameOfCountryForWeb ); 
    
            let nameOfCountryFull = json[ 0 ][ "altSpellings" ][ 2 ];
            console.log( nameOfCountryFull );
            
            let continent = json[ 0 ][ "region" ];
            console.log( continent );
    
            let capital = json[ 0 ][ "capital" ][ 0 ];
            console.log( capital );
    
            let numberOfCitizens = json[ 0 ][ "population" ];
            console.log( numberOfCitizens );
    
            let emblem = json[ 0 ][ "coatOfArms" ][ "png" ];
    
            let flag = json[ 0 ][ "flags" ][ "png" ];
    
            // do strony
            document.getElementById( "placeForName" ).innerHTML = nameOfCountryForWeb;
            document.getElementById( "placeForFullName" ).innerHTML = nameOfCountryFull;
            document.getElementById( "placeForContinent" ).innerHTML = continent;
            document.getElementById( "placeForCapital" ).innerHTML = capital;
            document.getElementById( "placeForNumberOfCitizens" ).innerHTML = numberOfCitizens;
            document.getElementById( "placeForEmblem" ).innerHTML = "<img src='" + emblem + "'></img>";
            document.getElementById( "placeForFlag" ).innerHTML = "<img src='" + flag + "'></img>";
        }

        
    } catch {
        console.error( error.message );
    }

    return json;
}

async function getNameOfCountry( )
{
    let nameOfCountry = document.getElementById( "nameOfCountry" ).value;

    console.log( nameOfCountry );

    let json = await getData( nameOfCountry );
    console.log( "cos" );
    console.log( json );
}