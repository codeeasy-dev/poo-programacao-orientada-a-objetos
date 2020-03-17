namespace Dynamic
{
    abstract class Vehicle
    {
        public string baseAction()
        {
            return "Move";
        }

        public abstract string action();
    }
}
