let W;
let a, b, c;

a = b = c = 1;

W = (( a + (( 2 * b - c ) / ( a + b ) ) ) / ( ( 2 * c - b ) / ( 2 * a + ( b / ( 2 * a ) - 4 * c ) ) )) - ( a / ( b + c ) );
document.write( "W = ", W, '<br>' );