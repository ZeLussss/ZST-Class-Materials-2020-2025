import random

print("Zadanie 1")

print()

tab = [1, 2, 5, 7, -10, 2, 44, 50, 33, 44]

#for i in range(10):
#    tab.append(int(input("Podaj liczbę: ")))

min = 0
max = 0

for i in tab:
    if min > i: 
        min = i
    if max < i:
        max = i

suma = 0

for i in range((len(tab))):
    suma += tab[i]

print("Liczba minimalna -> ", min)
print("Liczba maksymalna -> ", max)
print("Suma -> ", suma)
print("Średnia -> ", suma / len(tab))

print()

print("Zadanie 2")

print()

tab = [3 ,6 ,4 ,9 ,2 ,7 ,-10 ,2 ,6 ,2]

#for i in range(10):
#    tab.append(float(input("Podaj liczbe: ")))

print("Tablica przed sortowaniem")

for i in range(len(tab)):
    print(tab[i], end = " ")

print()
print()

print("Tablica po sortowaniu bąbelkowym")

for i in range(len(tab)):
    for j in range(0, len(tab) - i - 1):
        if tab[j] > tab[j + 1]:
            tab[j], tab[j + 1] = tab[j + 1], tab[j]

for i in range(len(tab)):
    print(tab[i], end = " ")

print()
print()

print("Zadanie 3")

print()

tab = [1, 3, 8, 9, -3, -3, 2, 1, 10, 3, 6, 9]

tab1 = []
tab2 = []
tab3 = []

for i in range(len(tab)):
    if tab[i] % 3 == 0:                         
        tab1.append(tab[i])
    if tab[i] < 0:                              
        tab2.append(tab[i])
    if tab[i] not in (tab[:i] + tab[i + 1:]):     
        tab3.append(tab[i])

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

print("Zadanie 4")

tab = []
tab1 = []
tab2 = []
tab3 = []
tab4 = []

a = -12

for i in range(12):
    tab.append(a)
    a += 1

print(tab)

a = 10

for i in range(16):
    tab1.append(a)
    a += 3

print(tab1)    

a = 4

for i in range(14):
    if i % 2 == 0:
        tab3.append(a)
        a += 2
    else:
        tab3.append(0)

print(tab3)

a = -2
b = 0

for i in range(12):
    tab4.append(a - b)
    a = a - b
    b += 1

print(tab4)


print("Random")

tab = []

for i in range(10):
    tab.append(random.randint(1,10))

print(tab)
