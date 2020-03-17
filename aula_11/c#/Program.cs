using System;
using Static;
using Dynamic;

namespace c_
{
    class Program
    {
        static void Main(string[] args)
        {
            var calculator = new Calculator();
            var nota = calculator.avarage(7, 8);

            Console.WriteLine(nota);

            Console.WriteLine("=====================");

            Vehicle myObject = new Car();

            Program.move(myObject);
        }

        static void move(Vehicle vehicle)
        {
            Console.WriteLine(vehicle.action());
        }
    }
}
