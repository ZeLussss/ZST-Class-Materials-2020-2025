import math

autor = "Ksawery Zelek"
klasa = "3TI"
data = "20.10.2022"

print("Zadanie 1")

print()

tab = []

for i in range(10):
    tab.append(int(input("Podaj liczbę całkowitą: ")))
    i += i

print ()

print("Tablica: ", tab)

print()

print("Wartość minimalna: ", min(tab))
print("Wartość maksymalna: ", max(tab))
print("Wartość wszystkich wyrażeń: ", sum(tab))
print("Średnia: ", (sum(tab) / len(tab)))
