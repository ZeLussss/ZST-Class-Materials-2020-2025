from math import *
import time

def FunkcjaSprawdzajaca(x):
    y = bool(True)
    tab = []
    a = int(sqrt(x))
    if x == 2:
        y = True
    elif x % 2 == 0:
        y = False
        tab.append(2)
    elif x % 3 == 0:
        for i in range(3, a + 1):
            if x % i == 0:
                y = False
                tab.append(i)
                i = i + 2
                break
            else:
                y = True
                i = i + 2
                continue
    print()
    if y == True:
        print("Ta liczba jest pierwsza")
        print()
    elif y == False:
        print("Ta liczba nie jest pierwsza")
        print()
        print("Dzielnik: ", tab, " ", "Dzielnik górny: ", "[", x, "]")
            
                

x = int(input("Podaj liczbę: "))

start = time.time()


FunkcjaSprawdzajaca(x)


stop = time.time()

print(stop - start)
