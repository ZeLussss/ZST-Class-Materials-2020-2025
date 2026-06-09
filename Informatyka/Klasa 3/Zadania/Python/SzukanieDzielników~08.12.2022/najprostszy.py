import time

tab1 = []

n = int(input("Podaj liczbę: "))

a = 1

start = time.time()

for i in range(1, n + 1):
    if n % i == 0:
        tab1.append(i)
    else:
        continue

stop = time.time()

print(tab1)
print(stop - start)
