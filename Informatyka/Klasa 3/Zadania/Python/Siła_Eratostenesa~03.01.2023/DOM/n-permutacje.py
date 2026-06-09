A = [5, 4, 1, 5, 6, 8]


def bubble_sort(A):
    for i in range(len(A)):
        for j in range(len(A) - 1):
            if A[j] > A[j + 1]:
                A[j], A[j + 1] = A[j + 1], A[j]
    return A

                

def N_Perm(A):
    tab = bubble_sort(A)
    print(tab)
    index = 0
    k = 0
    for i in range(len(tab)):
        index += 1
        if tab[len(tab) - 1 - i] > tab[i - 1]:
            k += 1
    return k

print(N_Perm(A))


