<?php

namespace App\Resource;

use App\Database\Database;

class Resource
{
    static function getConnection($tableName): iterable
    {
        $connection = Database::getConnection();
        $query = $connection->query("SELECT * FROM $tableName");
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    static function getSingle($tableName, $id): iterable
    {
        $connection = Database::getConnection();
        $query = $connection->prepare("SELECT * FROM {$tableName} WHERE {$tableName}_id={$id}");
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
}
