import java.io.IOException;
import Static.Calculator;
import Dynamic.*;

public class Main
{
    public static void main(String[] args) throws IOException
    {
        var calc = new Calculator();
        var nota = calc.avarage(7, 8);

        System.out.println(nota);

        System.out.println("============================");

        Vehicle myObject = new Car();

        Main.move(myObject);
    }

    private static void move(Vehicle vehicle)
    {
        System.out.println(vehicle.action());
    }
}
