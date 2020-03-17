namespace Dynamic
{
    class Plane : Vehicle
    {
        public override string action()
        {
            return this.baseAction() + " on the sky";
        }
    }
}
