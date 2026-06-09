#include <iostream>
using namespace std;

void createArray()
{
    char tab[26][6] = { };
    
    for (int i = 0; i < 6; i++)
    {
        for (int j = 0; j < 26; j++)
        {
            tab[j][i] = char(32);
        }
    }

    // 0
    tab[0][1] = char(219);
    tab[0][2] = char(219);
    tab[0][3] = char(219);
    tab[0][4] = char(219);
    tab[0][5] = char(219);

    // 1
    tab[1][0] = char(220);
    tab[1][3] = char(254);

    // 2
    tab[2][1] = char(219);
    tab[2][2] = char(219);
    tab[2][3] = char(219);
    tab[2][4] = char(219);
    tab[2][5] = char(219);

    // 4
    tab[4][0] = char(220);
    tab[4][1] = char(219);
    tab[4][2] = char(219);
    tab[4][3] = char(219);
    tab[4][4] = char(219);
    tab[4][5] = char(219);

    // 5
    tab[5][0] = char(220);
    tab[5][3] = char(219);

    // 6
    tab[6][1] = char(219);
    tab[6][2] = char(219);
    tab[6][4] = char(219);
    tab[6][5] = char(219);

    // 8
    tab[8][0] = char(220);
    tab[8][1] = char(219);
    tab[8][2] = char(219);
    tab[8][3] = char(219);
    tab[8][4] = char(219);
    tab[8][5] = char(219);

    // 9
    tab[9][0] = char(220);
    tab[9][5] = char(220);

    // 10
    tab[10][1] = char(219);
    tab[10][2] = char(219);
    tab[10][3] = char(219);
    tab[10][4] = char(219);
    tab[10][5] = char(223);

    // 12
    tab[12][0] = char(220);
    tab[12][1] = char(219);
    tab[12][2] = char(219);
    tab[12][3] = char(219);
    tab[12][4] = char(219);
    tab[12][5] = char(223);

    // 13
    tab[13][5] = char(220);

    // 14
    tab[14][0] = char(220);
    tab[14][1] = char(219);
    tab[14][2] = char(219);
    tab[14][3] = char(219);
    tab[14][4] = char(219);
    tab[14][5] = char(223);

    // 16
    tab[16][0] = char(220);
    tab[16][1] = char(219);
    tab[16][2] = char(219);
    tab[16][3] = char(219);
    tab[16][4] = char(219);
    tab[16][5] = char(219);

    // 18
    tab[18][0] = char(220);
    tab[18][1] = char(219);
    tab[18][2] = char(219);
    tab[18][3] = char(219);
    tab[18][4] = char(219);
    tab[18][5] = char(219);

    // 19
    tab[19][1] = char(220);
    tab[19][2] = char(219);

    // 20
    tab[20][3] = char(219);
    tab[20][4] = char(223);

    // 21
    tab[21][0] = char(220);
    tab[21][1] = char(219);
    tab[21][2] = char(219);
    tab[21][3] = char(219);
    tab[21][4] = char(219);
    tab[21][5] = char(219);

    // 23
    tab[23][1] = char(219);
    tab[23][2] = char(219);
    tab[23][3] = char(219);
    tab[23][4] = char(219);
    tab[23][5] = char(223);

    // 24
    tab[24][0] = char(220);
    tab[24][5] = char(220);

    // 25
    tab[25][1] = char(219);
    tab[25][2] = char(219);
    tab[25][3] = char(219);
    tab[25][4] = char(219);
    tab[25][5] = char(223);

    for (int i = 0; i < 6; i++)
    {
        for (int j = 0; j < 26; j++)
        {
            cout << tab[j][i]; 
        }
        cout << "\n";
    }

}

int main()
{
    createArray();
}

