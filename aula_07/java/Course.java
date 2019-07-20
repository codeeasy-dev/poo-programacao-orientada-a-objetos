import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class Course extends Connection
{
    Course()
    {
        super();
        this.connect();
    }

    public List<Map<String, String>> getCourses()
    {
        Map<String, String> course = new HashMap<String, String>();
        course.put("name", "POO");
        course.put("from", "Code Easy");

        List<Map<String, String>> courses = new ArrayList<>();
        courses.add(course);

        return courses;
    }
}