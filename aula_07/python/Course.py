from Connection import Connection

class Course(Connection):
    def __init__(self):
        super().__init__()
        self._connect()
    
    def getCourses(self):
        return [
            {
                'name': 'POO',
                'from': 'Code Easy'
            }
        ]