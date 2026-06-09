import time
from math import *

tab1 = []
tab2 = []
tab3 = []

n = int(input("Podaj liczbę: "))

a = int(sqrt(n))

start = time.time()

for i in range(1, a + 1):
    if (n ** 1/2) % i == 0:
        tab1.append(i)
    else:
        continue

for i in range(len(tab1)):
    tab2.append(n // tab1[i])

for i in range(1, len(tab1)):
    tab3.append(tab1[i])

if(tab1[-1] == tab2[-1]):
    del(tab2[-1])

sorted(tab2)
   
tab1.extend(list(reversed(tab2)))

print(tab1)

stop = time.time()


print(stop - start)
