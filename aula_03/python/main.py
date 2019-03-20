from Bhaskara import Bhaskara

a = 2
b = 10
c = 5

bhaskara = Bhaskara()
try:
    resultado = bhaskara.calcular(a, b, c)
except Exception as error:
    print(error)
    exit()

print(resultado)
