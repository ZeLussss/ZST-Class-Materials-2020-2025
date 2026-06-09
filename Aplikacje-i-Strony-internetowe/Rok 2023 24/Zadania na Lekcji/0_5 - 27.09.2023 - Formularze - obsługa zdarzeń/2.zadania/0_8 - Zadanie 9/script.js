function changeBackgroundColor( color )
{
    console.log( color );

    let rightElem = document.getElementById( "prawy" );

    if( color == "Niebieski" )
    {
        rightElem.style.backgroundColor = "blue";
    }
    else if( color == "Żółty" )
    {
        rightElem.style.backgroundColor = "yellow";
    }
    else if( color == "Zielony" )
    {
        rightElem.style.backgroundColor = "green";
    }
}

function changeFontColor( color )
{
    console.log( color );

    let rightElem = document.getElementById( "prawy" );

    if( color == "black" )
    {
        rightElem.style.color = "black";
    }
    else if( color == "white" )
    {
        rightElem.style.color = "white";
    }
    else if( color == "brown" )
    {
        rightElem.style.color = "brown";
    }
}

function changeFontSize() 
{
    let fontSizeValue = document.getElementById( "font-size" ).value;
    document.getElementById( "prawy" ).style.fontSize = fontSizeValue;
}

function rysujObramowanie()
{
    let rightElem = document.getElementById( "image" );
    
    if( document.getElementById( "borderCheck" ).checked )
    {
        rightElem.style.border = "5px solid black";
    }
    else
    {
        rightElem.style.border = "none";
    }
}

function changeTypeList( type )
{
    let list = document.getElementById( "lista-zakupowa" );

    console.log( type );

    if( type == "disc" )
    {
        list.style.listStyleType = "disc";
    }
    else if( type == "square" )
    {
        list.style.listStyleType = "square";
    }
    else if( type == "circle" )
    {
        list.style.listStyleType = "circle";
    }
}
