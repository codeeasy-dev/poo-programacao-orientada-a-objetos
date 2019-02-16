using System;

namespace projeto
{
    class Carro
    {
        public string cor { get; set; }
        public int numeroPortas { get; set; }

        public void buzinar()
        {
            Console.WriteLine("O carro de cor " + this.cor + " com " + Convert.ToString(this.numeroPortas) + " portas buzinou.");
        }
    }
}
