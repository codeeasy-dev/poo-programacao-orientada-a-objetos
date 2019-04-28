class Person:
    def __init__(self):
        self.__name = ''
        self.__age = 0

    def __get_name(self) -> str:
        return self.__name

    def __set_name(self, name: str):
        self.__name = name

    def __get_age(self) -> int:
        return self.__age

    def __set_age(self, age: int):
        self.__age = age

    name = property(__get_name, __set_name)
    age = property(__get_age, __set_age)
