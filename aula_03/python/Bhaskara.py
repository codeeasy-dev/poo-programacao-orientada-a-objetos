import math

class Bhaskara:
    def __init__(self):
        self.__a = 0.0
        self.__b = 0.0
        self.__c = 0.0
        self.__delta = 0.0

    def calcular(self, a, b, c):
        self.__a = a
        self.__b = b
        self.__c = c

        self.__calcularDelta()
        self.__validarDelta()
        x1 = self.__calcularX1()
        x2 = self.__calcularX2()

        if(x1 == x2):
            return [x1]
        else:
            return [x1, x2]

    def __calcularDelta(self):
        self.__delta = (self.__b * self.__b) - (4 * self.__a * self.__c)

    def __validarDelta(self):
        if(self.__delta < 0):
            raise Exception("ERRO: Valores de A, B e C resultam num Delta negativo.\n")

    def __calcularX1(self):
        return (
            ((self.__b * -1) + math.sqrt(self.__delta))
            /
            (2 * self.__a)
        )

    def __calcularX2(self):
        return (
            ((self.__b * -1) - math.sqrt(self.__delta))
            /
            (2 * self.__a)
        )
