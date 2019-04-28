public class Person
{
    private String name;
    private int age;

    public String getName()
    {
        return this.name;
    }
    public Person setName(String name)
    {
        this.name = name;
        return this;
    }

    public int getAge()
    {
        return this.age;
    }
    public Person setAge(int age)
    {
        this.age = age;
        return this;
    }
}
