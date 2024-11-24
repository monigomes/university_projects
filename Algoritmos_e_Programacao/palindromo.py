def polindromo(numero):
    numero_str = str(numero)
    
    if numero_str == numero_str[::-1]:
        return "sim"
    else:
        return "não"
        
        
numero = int(input())
resultado = polindromo(numero)

print(resultado)