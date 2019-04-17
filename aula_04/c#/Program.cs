using System;

namespace projeto
{
    class Program
    {
        static void Main(string[] args)
        {
            var log = new Log("info.log");

            log.writeLine("SUCCESS: Ok");

            Console.Write(log.getLog());
        }
    }
}
