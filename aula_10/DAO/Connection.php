<?php

namespace DAO;

abstract class Connection
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO('sqlite:' . __DIR__ . '/../db.sqlite3');
        $this->pdo
            ->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
}
