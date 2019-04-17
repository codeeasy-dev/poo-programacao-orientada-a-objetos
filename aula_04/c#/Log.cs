using System;
using System.IO;

namespace projeto
{
    class Log
    {
        private string file { get; set; }

        public Log(string file)
        {
            this.file = file;
        }

        public void writeLine(string payload)
        {
            File.AppendAllText(this.file, payload + "\n");
        }

        public string getLog()
        {
            return File.ReadAllText(this.file);
        }
    }
}
