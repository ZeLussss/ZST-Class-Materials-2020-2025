#include <iostream>

using namespace std;

void Wczytaj(int *x, int *y, float *z, float *v)
{
    cout << "Podaj 4 liczby / 2 calkowite , 2 rzeczywiste /";
    cin >> x , y , z , v;
}

void Modyfikuj(int *x, int *y, float *z, float *v)
{
    x = x * 2;
    y = y * 5;
    z = z * 8;
    v = v * 12;
}

void Drukuj(const int x, const int y, const int z, const int v)
{
    cout << "a ~ " << x << endl;
    cout << "b ~ " << y << endl;
    cout << "c ~ " << z << endl;
    cout << "d ~ " << v << endl;

int main()
{
    int a, b;
    float c, d;

}
