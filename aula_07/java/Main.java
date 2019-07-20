import java.io.IOException;
import java.util.List;
import java.util.Map;

public class Main
{
    public static void main(String[] args) throws IOException
    {
        User user = new User();
        List<Map<String, String>> users = user.getUsers();
        users.forEach(
            singleUser -> System.out.println("* " + singleUser.get("name"))
        );

        Course course = new Course();
        List<Map<String, String>> courses = course.getCourses();
        courses.forEach(
            singleCourse -> System.out.println(
                "* " + singleCourse.get("name") + " - " + singleCourse.get("from")
            )
        );        
    }
}
