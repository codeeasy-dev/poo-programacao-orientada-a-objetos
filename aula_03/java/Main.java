public class Main
{
    public static void main(String[] args)
    {
        double a = 2;
        double b = 10;
        double c = 5;
        double[] resultado;

        var bhaskara = new Bhaskara();

        try {
            resultado = bhaskara.calcular(a, b, c);
        } catch (Exception ex) {
            System.out.println(ex.getMessage());
            return;
        }

        for (double item : resultado) {
            System.out.println(Double.toString(item));
        }
    }
}
