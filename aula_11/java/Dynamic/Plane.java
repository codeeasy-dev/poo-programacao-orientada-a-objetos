package Dynamic;

public class Plane extends Vehicle
{
    public String action()
    {
        return this.baseAction() + " on the sky";
    }
}
