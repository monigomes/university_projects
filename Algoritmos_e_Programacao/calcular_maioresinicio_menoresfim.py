'''Programa em Python que leia dois números inteiros, chamados aqui de início e fim,
 e calcule a soma dos números inteiros maiores ou iguais a início e menores ou iguais fim.
Por exemplo:
Entrada	   Resultado
1
100         5050
3
99          4947'''


def soma_intervalo(inicio, fim):
    soma = sum(range(inicio, fim + 1))
    return soma
 
    
inicio = int(input())
fim = int(input())

resultado= soma_intervalo(inicio, fim)
print(resultado)