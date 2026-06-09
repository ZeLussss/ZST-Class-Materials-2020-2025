import math
import time

x = int(input("Podaj liczbę: "))

start = time.time()

tab =  []
tab1 = []

print()

for i in range(2, x):
    if x % i == 0:
        y = False
        tab.append(i)
        break
    else:
        y = True
        continue

if y == True:
    print("Wartość jest liczbą pierwszą")
elif y == False:
    print("Wartość nie jest liczba pierwsza")
    print()
    print("Dzielnik: ", tab, " ", "Dzielnik górny: ", "[", x, "]")

print()

stop = time.time()

print(stop - start)    
