<?php

namespace App\Resource;

use App\Database\Database;

class Resource
{
    static function getConnection($tableName): iterable
    {
        $connection = Database::getConnection();
        $query = $connection->query("SELECT * FROM $tableName");
        return $query->fetchAll();
    }
}
