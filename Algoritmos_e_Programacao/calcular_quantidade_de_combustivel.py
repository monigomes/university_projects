'''O problema a ser aqui resolvido, executando os passos acima, consiste em: 

Dados o tempo gasto por um veículo em uma viagem e sua velocidade média, calcular 
a quantidade de litros de combustível gasto pelo veículo, considerando que o veículo 
faz um quilômetro por litro. 
Para isso, determine primeiramente a distância percorrida pelo veículo 
(com base no tempo gasto por ele e na sua velocidade média) e depois a quantidade de 
combustível que ele utilizou.'''

tempo_viagem = float(input("Insira o tempo de viagem (h): "))
velocidade_media = float(input("Digite a velocidade média (km/h): "))
consumo_medio = float(input(" Digite o consumo médio do veículo (km/l): "))

distancia = tempo_viagem * velocidade_media

def calculo_combustivel(distancia, consumo_medio):
    return distancia / consumo_medio

combustivel_gasto = calculo_combustivel(distancia, consumo_medio)
print(combustivel_gasto)