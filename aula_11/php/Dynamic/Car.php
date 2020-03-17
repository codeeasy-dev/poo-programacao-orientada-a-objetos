<?php

class Car extends Vehicle
{
    public function action(): string
    {
        return $this->baseAction() . " on the road";
    }
}
