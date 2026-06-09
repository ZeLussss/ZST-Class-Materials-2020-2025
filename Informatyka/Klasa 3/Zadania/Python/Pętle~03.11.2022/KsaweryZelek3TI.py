autor = ("Ksawery Zelek")
klasa = ("3 TI")
data = ("02.11.2022")
temat = ("Funkcje")

#
#   Kalkulator
#

def Addition(x, y):
    sum_add = (x + y)
    print("Wynik dodawania -> ", sum_add, end = "\n")

def Substraction(x, y):
    sum_sub = (x - y)
    print("Wynik odejmowania -> ", sum_sub, end = "\n")

def Multiplication(x, y):
    sum_mul = (x * y)
    print("Wynik mnożenia -> ", sum_mul, end = "\n")

def Division(x, y):
    if y == 0:
        print("Wynik dzielenia -> ", "Dzielenie przez 0", end = "\n")
    else:
        sum_div = (x / y)
        print("Wynik dzielena -> ", sum_div, end = "\n")

x = input("Podaj pierwszą liczbę: ")
y = input("Podaj drugą liczbę: ")

Addition(x, y)
Substraction(x, y)
Multiplication(x, y)
Division(x, y)





