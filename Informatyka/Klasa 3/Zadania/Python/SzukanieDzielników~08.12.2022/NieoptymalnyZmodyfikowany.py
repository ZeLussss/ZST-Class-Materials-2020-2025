import time

tab1 = []
tab2 = []

n = int(input("Podaj liczbę: "))

a = int(n / 10)

start = time.time()

if n % 2 == 0:
    for i in range(1, a):
        if n % i == 0:
            tab1.append(i)
            i += 2
        else:
            continue
        i += 2
    for i in range(1, 10):
        if n % i == 0:
            tab2.append(int(n / i))
elif n % 3 == 0:
    for i in range(1, a):
        if n % 3 == 0:
            tab1.append(i)
            i += 2
        else:
            continue
        i += 2
    b = 3
    # for i in range(1, b):
    #     print(tab2)
    #     if n % b == 0:
    #         tab2.append(int(n / b))
    #         b += 2
        

tab1.extend(list(reversed(tab2)))

stop = time.time()

print(tab1)

print(stop - start)
