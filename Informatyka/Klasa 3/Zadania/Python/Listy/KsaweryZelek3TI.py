import math

autor = "Ksawery Zelek"
klasa = "3TI"
data = "20.10.2022"



#
#   Zadanie 1
#

print("Zadanie 1")

print()

tab = []

for i in range(10):
    tab.append(int(input("Podaj liczbę całkowitą: ")))
    i += i

print ()

print("Tablica ")

for i in range(len(tab)):
    print(tab[i], end = " ")

print()
print()

#
#   MIN MAX SUM
#

print("Wykorzystane Funkcje -> min , max , sum")
print()
print("Wartość minimalna: ", min(tab))
print("Wartość maksymalna: ", max(tab))
print("Wartość wszystkich wyrażeń: ", sum(tab))
print("Średnia: ", (sum(tab) / len(tab)))

print()
print()

#   ZADEKLAROWANIE WARTOŚCI TABLICY

a = tab[0]
b = tab[1]
c = tab[2]
d = tab[3]
e = tab[4]
f = tab[5]
g = tab[6]
h = tab[7]
i = tab[8]
j = tab[9]

#
#   PĘTLE
#

print("Wykorzystane Funkcje -> Pętle")
print()

# Wartość minimalna

min = tab[0]
for i in range(1, len(tab)):
    if tab[i] < min:
        min = tab[i]
print("Wartość minimalna: ", min)

# Wartość maksymalna

max = tab[0]
for i in range(1, len(tab)):
    if tab[i] > max:
        max = tab[i]
print("Wartość maksymalna: ", max)

# Suma wszystkich liczb

suma = 0
for i in range(len(tab)):
    suma += tab[i]
print("Suma wszystkich liczb: ", suma)

# Średnia

srednia = suma / len(tab)
print("Średnia: ", srednia)

print()
print()





#
#   Zadanie 2
#

print("Zadanie 2")

print()

tab = []

for i in range(10):
    tab.append(int(input("Podaj liczbę całkowitą: ")))

print()

print("Tablica przed sortowaniem")

for i in range(len(tab)):
    print(tab[i], end = " ")

print()
print()

var = len(tab)

for i in range(var):
    for j in range(0, var - i - 1):
        if tab[j] > tab[j + 1]:
            tab[j], tab[j + 1] = tab[j + 1], tab[j]

print("Tablica po sortowaniu")

for i in range(len(tab)):
    print(tab[i], end = " ")

print()
print()
print()





#
#   Zadanie 3
#

print("Zadanie 3")

print()

tab = []
tab1 = []   # Liczby podzielne przez 3
tab2 = []   # Liczby ujemne
tab3 = []   # Liczby, kóre sie powtarzają

for i in range(12):
    tab.append(int(input("Podaj liczbę calkowitą: ")))

print()

tab = sorted(tab)

print("Tablica (sortowana)")

for i in range(len(tab)):
    print(tab[i], end = " ")

print()

for i in range(len(tab)):
    if tab[i] % 3 == 0:                         # Liczby podzielne przez 3
        tab1.append(tab[i])
    if tab[i] < 0:                              # Liczby ujemne
        tab2.append(tab[i])
    if tab[i] not in (tab[:i] + tab[i + 1:]):     # Liczby, które się nie powtarzają
        tab3.append(tab[i])

print()

print("Tablica z liczbami podzielnymi przez 3")

for i in range(len(tab1)):
    print(tab1[i], end=" ")

print()
print()

print("Tablica z liczbami ujemnymi")

for i in range(len(tab2)):
    print(tab2[i], end = " ")

print()
print()

print("Tablica z liczbami, które się nie powtarzają")

for i in range(len(tab3)):
    print(tab3[i], end = " ")

print()
print()





#
#   Zadanie 4
#

print("Zadanie 4")

print()

tab1 = []

for i in range(12):
    tab1.append(i - 12)

for i in range(len(tab1)):
    print(tab1[i], end = " ")

print()
print()


tab2 = []

a = 10

for i in range(16):
    tab2.append(a)
    a += 3

for i in range(len(tab2)):
    print(tab2[i], end = " ")

print()
print()


tab3 = []

for i in range(14):
    if(i % 2 != 0):
        tab3.append(0)
    else:
        tab3.append((i * 1) + 4)

for i in range(len(tab3)):
    print(tab3[i], end = " ")

print()
print()


tab4 = []

a = -2
b = 0

for i in range(12):
    tab4.append(a - b)
    a = a - b
    b += 1

for i in range(len(tab4)):
    print(tab4[i], end = " ")

print()







