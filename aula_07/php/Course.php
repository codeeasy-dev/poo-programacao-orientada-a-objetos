<?php

class Course extends Connection
{
    public function __construct()
    {
        parent::__construct();
        $this->connect();
    }

    public function getCourses(): array
    {
        return [
            [
                'name' => 'POO',
                'from' => 'Code Easy',
            ],
        ];
    }
}
