import math

Autor = ("Ksawery Zelek 3TI")
Temat = ("Sprawdzian Warunki")
Data = ("06.10.2022")

print("Zadanie 1 \n")

var = int(input("Wczytaj liczbę całkowitą: "))

if var % 17 == 0:
    print("Wynik -> Liczba podzielna przez 17")
elif var % 12 == 0:
    print("Wynik -> Liczba podzielna przez 12")
elif var % 12 == 0 and var % 17 == 0:
    print("Wynik -> Liczba podzielna jednocześnie przez obie")
else:
    print("Wynik -> Liczba niepodzielna")

print()


print("Zadanie 2 \n")

var = int(input("Podaj liczbę całkowitą: "))

if var == (-10) or var == 10:
    var1 = int(input("Podaj liczbę całkowitą: "))
elif var > 0:
    wynik = var ** 2
    print("Wynik -> ", wynik)
elif var < 0:
    wartosc_bezwgl = var * (-1)
    print("Wynik -> ", wartosc_bezwgl)
elif var == 0:
    print("BRAK")

print()
print()


print("Zadanie 3 \n")

var1 = float(input("Podaj liczbę: "))
var2 = float(input("Podaj liczbę: "))

if var1 > var2:
    var_1 = var1 ** 3
    if var2 < 0:
        var2 = float(input("Podaj liczbę od nowa: "))
        var_2 = var2 ** 0.5
        print("Wynik potęgi -> ", var_1)
        print("Wynik pierwiastkowania -> ", var_2)
    else:
        var_2 = var2 ** 0.5
        print("Wynik potęgi -> ", var_1)
        print("Wynik pierwiastkowania -> ", var_2)
elif var2 > var1:
    var_2 = var2 ** 3
    if var1 < 0:
        var1 = float(input("Podaj liczbę od nowa: "))
        var_1 = var1 ** 0.5
        print("Wynik potęgi 1 -> ", var_2)
        print("Wynik pierwiastkowania -> ", var_1)
    else:
        var_1 = var1 ** 0.5
        print("Wynik potęgi -> ", var_2)
        print("Wynik pierwiatkowania -> ", var_1)

print()
print()


print("Zadanie 4 \n")

var1 = float(input("Podaj 1 liczbę: "))
var2 = float(input("Podaj 2 liczbę: "))
var3 = float(input("Podaj 3 liczbę: "))
var4 = float(input("Podaj 4 liczbę: "))
var5 = float(input("Podaj 5 liczbę: "))

if var1 < var2 and var1 < var3 and var1 < var4 and var1 < var5:
    wartosc_najmn = var1
elif var2 < var1 and var2 < var3 and var2 < var4 and var2 < var5:
    wartosc_najmn = var2
elif var3 < var1 and var3 < var2 and var3 < var4 and var3 < var5:
    wartosc_najmn = var3
elif var4 < var1 and var4 < var2 and var4 < var3 and var4 < var5:
    wartosc_najmn = var4
elif var5 < var1 and var5 < var2 and var5 < var3 and var5 < var4:
    wartosc_najmn = var5
elif var1 > var2 and var1 > var3 and var1 > var4 and var1 > var5:
    wartosc_najw = var1
elif var2 > var1 and var2 > var3 and var2 > var4 and var2 > var5:
    wartosc_najw = var2
elif var3 > var1 and var3 > var2 and var3 > var4 and var3 > var5:
    wartosc_najw = var3
elif var4 > var1 and var4 > var2 and var4 > var3 and var4 > var5:
    wartosc_najw = var4
elif var5 > var1 and var5 > var2 and var5 > var3 and var5 > var4:
    wartosc_najw = var5
print("Wartosc najmniejsza -> ", wartosc_najmn)

print()
print()


print("Zadanie 5 \n")

R = int(input("Podaj 1 liczbę: "))
G = int(input("Podaj 2 liczbę: "))
B = int(input("Podaj 3 liczbę: "))

if R == 0 and G == 0 and B == 0:
    print("Czarny")
elif R == 1 and G == 1 and B == 1:
    print("Biały")
elif R == 1 and G == 0 and B == 0:
    print("Czerwony")
elif R == 1 and G == 1 and B == 0:
    print("żółty")
elif R == 1 and G == 0 and B == 1:
    print("Różowy")
elif R == 0 and G == 1 and B == 0:
    print("Zielony")
elif R == 0 and G == 1 and B == 1:
    print("Aqua")
