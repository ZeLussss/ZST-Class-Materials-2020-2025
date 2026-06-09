autor = ("Ksawery Zelek")
klasa = ("3TI")
data = ("19.11.2022")
temat = ("NWW | NWD")

def NWD(a, b):
    while a != b:
        if a > b:
            a -= b
        elif b > a:
            b -= a
    return a


def NWW(a, b):
    NWW = (a * b) // NWD(a, b)
    return NWW

print()

a = int(input("Podaj liczbę: "))
b = int(input("Podaj liczbę: "))

print()

print("Największy wspólny dzielnik -> ", NWD(a, b))
print("Najmniejsza wspólna wielokrotność -> ", NWW(a, b))
