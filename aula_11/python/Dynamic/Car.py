from Dynamic.Vehicle import Vehicle

class Car(Vehicle):
    def action(self):
        return self.baseAction() + " on the road"
