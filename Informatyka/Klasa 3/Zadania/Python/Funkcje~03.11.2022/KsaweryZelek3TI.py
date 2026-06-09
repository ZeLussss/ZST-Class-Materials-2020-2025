from math import *
import random

autor = ("Ksawery Zelek")
klasa = ("3 TI")
data = ("02.11.2022")
temat = ("Funkcje")


#
#   Kalkulator
#

def Addition(x, y):
    sum_add = (x + y)
    print("Wynik dodawania -> ", sum_add, end="\n")


def Substraction(x, y):
    sum_sub = (x - y)
    print("Wynik odejmowania -> ", sum_sub, end="\n")


def Multiplication(x, y):
    sum_mul = (x * y)
    print("Wynik mnożenia -> ", sum_mul, end="\n")


def Division(x, y):
    if y == 0:
        print("Wynik dzielenia -> ", "Dzielenie przez 0", end="\n")
    else:
        sum_div = (x / y)
        print("Wynik dzielena -> ", sum_div, end="\n")


#
#   Delta
#

def FunkcjaKwadratowa(x, y, z):  # Funkcja Kwadratowa -> ax^2 + bx + c   |   Delta -> b^2 - 4 * a * c    |   x1 = ((-b) - sqrt(delta)) / 2a    |   x2 = ((-b) + sqrt(delta)) / 2a    |   x0 = -b / 2a
    if x == 0:
        print("To nie jest równanie kwadratowe")
    else:
        Delta = (y * y) - 4 * x * z
        if Delta < 0:
            print("Brak")
        elif Delta == 0:
            x0 = -y / 2 * x
            print("Jedno miejsce zerowe [x0] -> ", x0)
        else:
            x1 = ((-y) - sqrt(Delta)) / (2 * x)
            x2 = ((-y) + sqrt(Delta)) / (2 * x)
            print("Pierwsze miejsce zerowe [x1] -> ", x1)
            print("Drugie miejsce zerowe [x2] -> ", x2)


#
#   Tablica jako parametr
#

def losowanie(tab):
    for i in range(len(tab)):
        tab[i] = random.randint(10, 99)

def looking_for_numbers(tab):
    a = 0
    for i in range(len(tab)):
        for j in range(i + 1, len(tab)):
            if tab[i] == tab[j]:
                a += 1
                break
    return a


#
#   Zadania
#

print("Zadanie 1")

print()

a = float(input("Podaj pierwszą liczbę: "))
b = float(input("Podaj drugą liczbę: "))

print()

Addition(a, b)
Substraction(a, b)
Multiplication(a, b)
Division(a, b)

print()
print("--------------------------------------------------------------------------------------------")
print()

print("Zadanie 2")

print()

a = float(input("Podaj pierwszą liczbę [a]: "))
b = float(input("Podaj drugą liczbę [b]: "))
c = float(input("Podaj trzecią liczbę [c]: "))

print()

FunkcjaKwadratowa(a, b, c)

print()
print("--------------------------------------------------------------------------------------------")
print()

print("Zadanie 3")

print()

tab3 = [0] * 100

losowanie(tab3)

print("Tablica: ", tab3)

print()

print("Powtarzają się ", looking_for_numbers(tab3), " wartości")
