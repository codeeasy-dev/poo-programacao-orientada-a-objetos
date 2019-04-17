import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;

public class Log
{
    private String file;

    public Log(String file)
    {
        this.file = file;
    }

    public void writeLine(String payload) throws IOException
    {
        var writer = new BufferedWriter(
            new FileWriter(this.file, true)
        );

        writer.write(payload);
        writer.newLine();
        writer.close();
    }

    public String getLog() throws IOException
    {
        var reader = new BufferedReader(
            new FileReader(this.file)
        );

        String output = "";
        String line = "";
        while((line = reader.readLine()) != null)
        {
            output += line + "\n";
        }
        reader.close();

        return output;
    }
}
