<?php

class Connection
{
    public function __construct()
    {
        echo "Conectando\n";
    }

    protected function connect(): void
    {
        echo "Conectado\n";
    }
}
