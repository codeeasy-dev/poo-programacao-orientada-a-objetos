package Dynamic;

public class Car extends Vehicle
{
    public String action()
    {
        return this.baseAction() + " on the road";
    }
}
