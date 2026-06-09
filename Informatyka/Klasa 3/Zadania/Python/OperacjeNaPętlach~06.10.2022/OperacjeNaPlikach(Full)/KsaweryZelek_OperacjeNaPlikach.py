import math

autor = ('Ksawery Zelek')
data = ('06.10.2022')
klasa = ('3TI')
temat = ('Operacje na plikach')

#
# Zadanie 1
#

print("Zadanie 1 \n")

plik = open("Wyniki.txt", "w")                      # w -> plik do zapisu (usuwa stare dane, nadpisuje)

print("--- Start Pliku --- \n")


var1 = int(input("Podaj pierwszą liczbę: "))
var2 = int(input("Podaj drugą liczbę: "))

var1_2 = var1 * var2

print("Iloczyn -> ", var1_2, file = plik, end = "\n")


# coś.upper() = Duże litery
# coś.lower() = Małe litery

var3 = input("Podaj linię tekstu: ")

print(var3.upper(), file = plik, end = "\n")


var4 = float(input("Podaj liczbę z przecinkiem: "))

var4_1 = var4 ** 0.5

print("Pierwiastek -> ", var4_1, file = plik, end = "\n")


var5 = int(input("Podaj liczbę całkowitą: "))

print("?" * var5, file = plik)

plik.close()

print()
print()



#
# Zadanie 2
#

print("Zadanie 2 \n")

with open("Logi.log", 'a') as plik:                 # automatyczne zamykanie pliku -> with open("NAZWA_PLIKU, "tryb") as NAZWA
    var = input("Podaj liczbę całkowitą: ")         # a -> append - dopisywanie do plików
    plik.write(var)
    plik.write("\n")

print()
print()



#
# Zadanie 3
#

print("Zadanie 3 \n")

with open("Zepsute_dane.txt", "r") as plik:
    zawartosc = plik.read()
    str2 = zawartosc.split("\n")
    var1 = float(str2[ 1 ])
    var2 = float(str2[ 2 ])
    var3 = float(str2[ 3 ])
    var4 = float(str2[ 4 ])
    var5 = float(str2[ 5 ])
    var6 = float(str2[ 10 ])
    var7 = float(str2[ 11 ])
    var8 = float(str2[ 12 ])
    var9 = float(str2[ 13 ])
    var10 = float(str2[ 14 ])
    suma = var1 + var2 + var3 + var4 + var5 + var6 + var7 + var8 + var9 + var10
    print( "Suma liczb to: ", suma)





