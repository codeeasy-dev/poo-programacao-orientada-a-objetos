using System;

namespace c_
{
    class Program
    {
        static void Main(string[] args)
        {
            var course = new Course();
            var courses = course.getCourses();
            
            foreach(var c in courses)
            {
                Console.WriteLine(c["name"] + " - " + c["from"]);
            }

            Console.WriteLine();

            var user = new User();
            var users = user.getUsers();

            foreach(var u in users)
            {
                Console.WriteLine(u["name"]);
            }
        }
    }
}
