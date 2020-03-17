<?php

abstract class Vehicle
{
    public function baseAction(): string
    {
        return "Move";
    }

    protected abstract function action(): string;
}
