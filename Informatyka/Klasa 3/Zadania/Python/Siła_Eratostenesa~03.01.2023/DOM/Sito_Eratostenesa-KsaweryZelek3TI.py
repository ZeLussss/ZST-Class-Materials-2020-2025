import time
from math import *

tab = []
tab2 = []
index = 0


def SitoEratostenesa(K, tab, tab2):
    a = bool(True)
    b = bool(False)
    for i in range(2, int(sqrt(K)) + 1):
        tab.append(i)
    for i in range(len(tab)):
        x = tab[i]
        y = 0
        index = 0
        for i in range(len(tab)):
            if tab[i] == a:
                continue
            else:
                if tab[i] % x == 0:
                    tab[i] == a
                    y == x
                    for i in range(len(tab)):
                        index += 1
                        tab[i] == b
                        i += y
                        if tab[i] > index - 1:
                            continue
                else:
                    tab[i] == b
    for i in range(int(sqrt(K))):
        if tab[i] == a:
            tab2.append(tab[i])
    return tab2



    




K = int(input("Podaj liczbę: "))

start = time.time()

SitoEratostenesa(K, tab, tab2)

print(tab)
print(tab2)

stop = time.time()

print(stop - start)