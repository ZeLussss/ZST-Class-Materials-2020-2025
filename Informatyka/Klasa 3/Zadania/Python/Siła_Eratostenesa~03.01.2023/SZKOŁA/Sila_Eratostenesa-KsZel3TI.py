import time

n = int(input("Podaj liczbę [od 9 do n]: "))

start = time.time()  

tab = [2, 3, 5, 7]

for i in range(9, n, 2):
    p = (i ** (1/2))
    for x in range(1, len(tab)):
        if(i % tab[x] == 0):
            break
        if(p < tab[x]):
            tab.append( i )
            break
       

stop = time.time()

print(tab)

print(stop - start)

print("Długość tablicy: ", len(tab))
