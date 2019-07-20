using System;
using System.Collections.Generic;

namespace c_
{
    class Course : Connection
    {
        public Course() : base()
        {
            this.connect();
        }

        public List<Dictionary<string, string>> getCourses()
        {
            var course = new Dictionary<string, string>();
            course.Add("name", "POO");
            course.Add("from", "Code Easy");

            var courses = new List<Dictionary<string, string>>();
            courses.Add(course);

            return courses;
        }
    }
}