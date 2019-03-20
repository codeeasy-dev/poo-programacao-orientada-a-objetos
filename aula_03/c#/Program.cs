using System;

namespace projeto
{
    class Program
    {
        static void Main(string[] args)
        {
            double a = 2;
            double b = 10;
            double c = 5;
            double[] resultado;

            var bhaskara = new Bhaskara();

            try {
                resultado = bhaskara.calcular(a, b, c);
            } catch(Exception ex) {
                Console.WriteLine(ex.Message);
                return;
            }

            foreach (double item in resultado)
            {
                Console.WriteLine(item.ToString());
            }
        }
    }
}
