function usmieszek()
{
    if( trueImg )
    {
        document.getElementById( 'smieszek' ).src = tabImg[ 1 ];
        trueImg = false;
    }
    else 
    {
        document.getElementById( 'smieszek' ).src = tabImg[ 0 ];
        trueImg = true;
    }
}

function displayImg( zdjecie )
{
    let x = zdjecie.querySelector( 'img' );
    let y = document.getElementById( 'zdj' );
    y.src = x.src;
}

let tabImg = [ 'smile_1.png', 'smile_2.png' ];
        
let trueImg = true;