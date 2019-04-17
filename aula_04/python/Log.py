class Log:
    def __init__(self, file):
        self.__file = file

    def write_log(self, payload):
        file = open(self.__file, "a+")
        file.write(payload + "\n")
        file.close()

    def get_log(self):
        file = open(self.__file, "r")
        data = file.read()
        file.close()
        return data
