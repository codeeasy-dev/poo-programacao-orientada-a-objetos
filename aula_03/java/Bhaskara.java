public class Bhaskara
{
    private double a;
    private double b;
    private double c;
    private double delta;

    public double[] calcular(double a, double b, double c) throws Exception
    {
        this.a = a;
        this.b = b;
        this.c = c;

        this.calcularDelta();
        this.validarDelta();
        double x1 = this.calcularX1();
        double x2 = this.calcularX2();

        if(x1 == x2) {
            double[] resultado = {x1};
            return resultado;
        } else {
            double[] resultado = {x1, x2};
            return resultado;
        }
    }

    private void calcularDelta()
    {
        this.delta = (this.b * this.b) - (4 * this.a * this.c);
    }

    private void validarDelta() throws Exception
    {
        if(this.delta < 0) {
            throw new Exception("ERRO: Valores de A, B e C resultam num Delta negativo.\n");
        }
    }

    private double calcularX1()
    {
        return (
            ((this.b * -1) + Math.sqrt(this.delta))
            /
            (2 * this.a)
        );
    }

    private double calcularX2()
    {
        return (
            ((this.b * -1) - Math.sqrt(this.delta))
            /
            (2 * this.a)
        );
    }
}
