import java.io.IOException;

public class Main
{
    public static void main(String[] args) throws IOException
    {
        var log = new Log("info.log");

        log.writeLine("SUCCESS: Ok");

        System.out.print(log.getLog());
    }
}
