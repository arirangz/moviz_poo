<?php

namespace App\Repository;

use App\Entity\Book;
use App\Db\Mysql;
use App\Tools\StringTools;

class Repository
{
    protected \PDO $pdo;

    public function __construct()
    {
        $mysql = Mysql::getInstance();
        $this->pdo = $mysql->getPDO();
    }

}