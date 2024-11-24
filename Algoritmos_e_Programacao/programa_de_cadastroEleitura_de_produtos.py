'''Exercício: Você irá desenvolver um programa em Python que, inicialmente, lê uma quantidade n de frutas
 ou verduras a serem precificadas. Lida essa quantidade, seu programa deve ler os n produtos 
 em si, juntamente com o preço de cada um deles e guardá-los em uma lista.'''

#Início

def cadastrar_produtos():
    """
    Função para cadastrar produtos e seus preços.
    Esta função solicita a quantidade de produtos a ser cadastrada,
    lê o nome e o preço de cada produto, verifica se o produto já foi cadastrado,
    e, caso não tenha sido, o adiciona a uma lista.

    Retorna:
        list: Lista de tuplas, onde cada tupla contém o nome e o preço de um produto.
    """
    # Solicita ao usuário a quantidade de produtos que serão cadastrados
    n = int(input("Digite a quantidade de produtos a serem precificados: "))
    
    # Inicializa uma lista vazia para armazenar os produtos
    produtos = []

    # Loop para cadastrar cada produto
    for _ in range(n):
        # Solicita o nome do produto
        nome = input("Digite o nome do produto: ")
        
        # Solicita o preço do produto e converte para float
        preco = float(input("Digite o preço do produto: "))
        
        # Verifica se o produto já está na lista
        produto_ja_cadastrado = any(nome in prod for prod in produtos)
        if produto_ja_cadastrado:
            # Informa o usuário se o produto já foi cadastrado
            print("Produto já cadastrado")
        else:
            # Adiciona o produto (nome, preço) à lista
            produtos.append((nome, preco))
    
    # Retorna a lista completa de produtos
    return produtos

def buscar_preco(produtos):
    """
    Função para buscar o preço de produtos cadastrados.
    Esta função permite que o usuário consulte o preço de um produto pelo nome.
    O programa para de buscar preços quando o usuário digita "Fim".
    
    Argumentos:
        produtos (list): Lista de produtos cadastrados, cada produto é uma tupla (nome, preço).
    """
    while True:
        # Solicita o nome do produto para consulta
        nome = input()
        
        # Encerra a busca se o usuário digitar "Fim"
        if nome == "Fim":
            break
        
        # Procura o produto na lista de produtos cadastrados
        for prod, preco in produtos:
            if prod == nome:
                # Imprime o preço do produto, se encontrado
                print(preco)
                break
        else:
            # Informa se o produto não está cadastrado
            print("Produto nao cadastrado")

def main():
    """
    Função principal do programa.
    Primeiro, chama a função para cadastrar produtos e depois,
    permite que o usuário consulte o preço dos produtos cadastrados.
    """
    # Cadastra os produtos e salva na variável produtos
    produtos = cadastrar_produtos()
    
    # Inicia a consulta de preços dos produtos cadastrados
    buscar_preco(produtos)

# Verifica se o script está sendo executado diretamente
if __name__ == "__main__":
    main()

#Fim