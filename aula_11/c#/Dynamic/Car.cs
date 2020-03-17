namespace Dynamic
{
    class Car : Vehicle
    {
        public override string action()
        {
            return this.baseAction() + " on the road";
        }
    }
}
