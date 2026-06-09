tab = []

print( "Typ tablicy: ", type(tab))

print()

tab.append(int(input("Podaj liczbę całkowitą: ")))

print()

tab.append(44)
tab.append(55)
tab.append(0)

print("Cała tablica <append>:", tab)

print()

print("Element o indeksie 0: ", tab[0]) 

print("Element o indeksie 1: ", tab[1])

print("Element o indeksie 2: ", tab[2])

print("Element o indeksie 3: ", tab[3])

print()

print("Element ostatni: ", tab[-1])

print("Element przedostatni: ", tab[-2])

print()

tab[0] = 111
tab[-1] = 555

print("Zmieniona Tablica")

print()

print("Cała tablica: ", tab)

