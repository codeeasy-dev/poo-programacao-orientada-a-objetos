<?php

class User extends Connection
{
    public function __construct()
    {
        parent::__construct();
        $this->connect();
    }

    public function getUsers(): array
    {
        return [
            [
                'name' => 'Felipe Vieira',
            ],
        ];
    }
}
