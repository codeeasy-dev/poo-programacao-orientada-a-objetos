using System;

namespace c_
{
    class Connection
    {
        public Connection()
        {
            Console.WriteLine("Acessando a classe pai.");
        }

        protected void connect()
        {
            Console.WriteLine("Conectado.");
        }
    }
}