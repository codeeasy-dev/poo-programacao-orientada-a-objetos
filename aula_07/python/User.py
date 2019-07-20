from Connection import Connection

class User(Connection):
    def __init__(self):
        super().__init__()
        self._connect()
    
    def getUsers(self):
        return [
            {
                'name': 'Felipe Vieira'
            }
        ]