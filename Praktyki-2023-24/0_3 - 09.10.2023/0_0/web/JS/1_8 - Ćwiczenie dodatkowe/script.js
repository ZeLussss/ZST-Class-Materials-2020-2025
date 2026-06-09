function jeden()
{
    // 1 przycisk
    const value = document.querySelector('#output_1');
    const input = document.querySelector('#input_1');
    
    value.textContent = input.value;
    input.addEventListener( "input", ( event ) => {
        value.textContent = event.target.value;
    })
}

function dwa()
{
    // 2 przycisk
    const value = document.querySelector('#output_2');
    const input = document.querySelector('#input_2');
    
    value.textContent = input.value;
    input.addEventListener( "input", ( event ) => {
        value.textContent = event.target.value;
    })
}

function trzy()
{
    // 3 przycisk
    const value = document.querySelector('#output_3');
    const input = document.querySelector('#input_3');
    
    value.textContent = input.value;
    input.addEventListener( "input", ( event ) => {
        value.textContent = event.target.value;
    })
}

function oblicz( form )
{
    let kwota = form.input_1.value;
    let oprocentowanie = form.input_2.value;
    let okres = form.input_3.value;

    let r_podz_k = ( oprocentowanie / 12 )
    
    let rata = kwota * ( ( ( r_podz_k ) * Math.pow( ( 1 + r_podz_k ), okres ) ) / ( Math.pow( ( 1 + r_podz_k ), okres ) - 1 ) );

    rata = rata.toLocaleString('pl-PL', {
        style:'currency',
        currency:'PLN'
    });

    document.getElementById( "monthly_payment" ).innerHTML = "<br>" + "Wynik:&nbsp" + rata;
}

function reload( form )
{
    location.href = location.href;
}