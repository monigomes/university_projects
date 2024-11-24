'''Projete e implemente um programa em Python que leia uma sequência de quatro números 
inteiros e, para cada sequência lida, conte a quantidade de números inteiros positivos 
lidos e calcule a soma desses números. Como saída, o seu programa deve imprimir, para 
cada sequência lida o número de inteiros positivos existentes na sequência e sua respectiva 
soma. '''

numero1, numero2, numero3, numero4 = input('').split()
numeros = [int(numero1), int(numero2), int(numero3), int(numero4)]

positivos = [num for num in numeros if num > 0]
quantidade_positivos = len(positivos)
soma_positivos = sum(positivos)

print(f"Número de positivos lidos: {quantidade_positivos}")
print(f"Soma dos números positivos: {soma_positivos}")

'''Exemplo:
Entrada	     Resultado
0 -1 1 4     Número de positivos lidos: 2
             Soma dos números positivos: 5'''