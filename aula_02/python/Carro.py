class Carro:
    def __init__(self):
        self.cor = ""
        self.numeroPortas = 0

    def buzinar(self):
        print("O carro de cor " + self.cor + " com " + str(self.numeroPortas) + " portas buzinou.")