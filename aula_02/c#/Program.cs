using System;

namespace projeto
{
    class Program
    {
        static void Main(string[] args)
        {
            var carroDoFelipe = new Carro();
            carroDoFelipe.numeroPortas = 4;
            carroDoFelipe.cor = "vermelha";

            var carroDoJoao = new Carro();
            carroDoJoao.numeroPortas = 2;
            carroDoJoao.cor = "preta";

            carroDoFelipe.buzinar();
            carroDoFelipe.buzinar();
            carroDoJoao.buzinar();
        }
    }
}
