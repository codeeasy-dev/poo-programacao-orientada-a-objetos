<?php

class Boat extends Vehicle
{
    public function action(): string
    {
        return $this->baseAction() . " on the river";
    }
}
