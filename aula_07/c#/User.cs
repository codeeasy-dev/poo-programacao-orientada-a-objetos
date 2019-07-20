using System;
using System.Collections.Generic;

namespace c_
{
    class User : Connection
    {
        public User() : base()
        {
            this.connect();
        }

        public List<Dictionary<string, string>> getUsers()
        {
            var user = new Dictionary<string, string>();
            user.Add("name", "Felipe Vieira");
            
            var users = new List<Dictionary<string, string>>();
            users.Add(user);

            return users;
        }
    }
}