from Vehicle import Vehicle

class Plane(Vehicle):
    def action(self):
        return self.baseAction() + " on the sky"
