from math import *
import time

def FunkcjaSprawdzajaca(x):
    tab = []
    a = int(sqrt(x))
    for i in range(2, a + 1):
        if x % i == 0:
            y = False
            tab.append(i)
            break
        else:
            y = True
            continue
    print()
    if y == True:
        print("Ta liczba jest pierwsza")
        print()
    elif y == False:
        print("Ta liczba nie jest pierwsza")
        print()
        print("Dzielnik: ", tab, " ", "Liczba górna: ", "[", x, "]")

x = int(input("Podaj liczbę: "))

start = time.time()


FunkcjaSprawdzajaca(x)


stop = time.time()

print(stop - start)
