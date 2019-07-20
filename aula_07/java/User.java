import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class User extends Connection
{
    User()
    {
        super();
        this.connect();
    }

    public List<Map<String, String>> getUsers()
    {
        Map<String, String> user = new HashMap<String, String>();
        user.put("name", "Felipe Vieira");

        List<Map<String, String>> users = new ArrayList<>();
        users.add(user);

        return users;
    }
}