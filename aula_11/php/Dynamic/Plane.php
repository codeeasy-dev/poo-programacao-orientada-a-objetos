<?php

class Plane extends Vehicle
{
    public function action(): string
    {
        return $this->baseAction() . " on the sky";
    }
}
