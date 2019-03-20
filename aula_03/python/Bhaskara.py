import math

class Bhaskara:
    def __init__(self):
        self.a = 0.0
        self.b = 0.0
        self.c = 0.0
        self.delta = 0.0

    def calcular(self, a, b, c):
        self.a = a
        self.b = b
        self.c = c

        self.__calcularDelta()
        self.__validarDelta()
        x1 = self.calcularX1()
        x2 = self.calcularX2()

        if(x1 == x2):
            return [x1]
        else:
            return [x1, x2]

    def __calcularDelta(self):
        self.delta = (self.b * self.b) - (4 * self.a * self.c)

    def __validarDelta(self):
        if(self.delta < 0):
            raise Exception("ERRO: Valores de A, B e C resultam num Delta negativo.\n")

    def calcularX1(self):
        return (
            ((self.b * -1) + math.sqrt(self.delta))
            /
            (2 * self.a)
        )

    def calcularX2(self):
        return (
            ((self.b * -1) - math.sqrt(self.delta))
            /
            (2 * self.a)
        )
