#include <iostream>
#include <cmath>
using namespace std;

void sprawdz_okregi( float x1, float y1, float r1, float x2, float y2, float r2 )
{
    float dl_pom_srod   = sqrt( ( x2 - x1 ) * ( x2 - x1 ) + ( y2 - y1 ) * ( y2 - y1 ) );
    float suma_promieni = r1 + r2;

    // cout << "\ndl_srod = " << dl_pom_srod << " | sum_promieni = " << suma_promieni << "\n";

    if( suma_promieni < dl_pom_srod )
    {
        cout << "Nie posiada punktow wspolnych\n";
    } 
    else if( dl_pom_srod < abs( r1 - r2 ) )
    {
        cout << "Nie posiada punktow wspolnych\n";
    }
    else if( suma_promieni > dl_pom_srod )
    {
        cout << "Sa dwa punkty przeciecia\n";

        // Obliczanie punktów przecięcia
        float p1x, p1y, p2x, p2y;

        float a = ( r1 * r1 - r2 * r2 + dl_pom_srod * dl_pom_srod ) / ( 2 * dl_pom_srod );
        float h = sqrt( r1 * r1 - a * a );

        p1x = x1 + a * ( x2 - x1 ) / dl_pom_srod + h * ( y2 - y1 ) / dl_pom_srod;
        p1y = y1 + h * ( x2 - x1 ) / dl_pom_srod + a * ( y2 - y1 ) / dl_pom_srod;

        p2x = x1 + a * ( x2 - x1 ) / dl_pom_srod - h * ( y2 - y1 ) / dl_pom_srod;
        p2y = y1 - h * ( x2 - x1 ) / dl_pom_srod + a * ( y2 - y1 ) / dl_pom_srod;

        cout << "xa = " << p1x << " | ya = " << p1y << "\n";
        cout << "xb = " << p2x << " | yb = " << p2y << "\n";
    }
    else if( suma_promieni == dl_pom_srod )
    {
        cout << "Jest jeden punkt przeciecia\n";

        // Obliczanie punktu przecięcia
        float px, py;
        
        px = x1 + ( ( r1 * ( x2 - x1 ) ) / dl_pom_srod );
        py = y1 + ( ( r1 * ( y2 - y1 ) ) / dl_pom_srod );

        cout << "x = " << px << " | y = " << py << "\n";
    }

}

int main()
{
    float x1, x2, y1, y2, r1, r2;
    
    cin >> x1 >> y1 >> r1;
    cin >> x2 >> y2 >> r2;

    // KOD
    // sprawdz_okregi( 350, 60, 50, 440, 90, 60 );

    // sprawdz_okregi( 300, -20, 50, 410, -40, 60 );

    // sprawdz_okregi( 400, 20, 60, 415, 20, 40 );

    // sprawdz_okregi( 0, 0, 5, 8, 6, 5 );
    
    sprawdz_okregi( x1, y1, r1, x2, y2, r2 );
}