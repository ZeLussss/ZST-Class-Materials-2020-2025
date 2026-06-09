import random

autor = ("Ksawery Zelek")
klasa = ("3TI")
data_zadania = ("02.11.2022")

def print2DALL():
    for row in array2D:
        print(" ".join([str(elem).rjust(2) for elem in row]))

print("Zadanie 1")

print()

array2D = []

for i in range(1, 9):
    array1D = []
    for j in range(1, 13):
        array1D.append(i * j)
    array2D.append(array1D)

print2DALL()

print()
print()

print("Zadanie 2")

print()

array2D = []
array1D = []

for i in range(1, 11):
    array1D = []
    for j in range(1, 11):
        x = random.randint(0, 99)
        array1D.append(x)
    array2D.append(array1D)

print2DALL()

print()

print("Wartość minimalna w komlumnach: ")

for i in range(10):
    print(" | ", min([row[i] for row in array2D]), end = " | ")

print()
print()

print("Wartosc maksymalna w kolumnach: ")

for i in range(10):
    print(" | ", max([row[i] for row in array2D]), end = " | ")

print()
print()

print("Średnia z liczb w kolumnach: ")

for i in range(10):
    x = sum([row[i] for row in array2D])
    print(" |", x / 10, end = " | ")

print()
print()
print()

print("Zadanie 3")

print()

array2D = []

for i in range(1, 11):
    array1D = []
    for j in range(1, 11):
        array1D.append(j)
    array2D.append(array1D)

for i in range(1, 10):
    random.shuffle(array2D[i])

print2DALL()
