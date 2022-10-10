<?php

namespace App\Resource;

use App\Database\Database;

class Resource
{
    static function getTableData($tableName, $id = null)
    {
        $connection = Database::getConnection();
        if ($id) {
            $query = $connection->prepare("SELECT * FROM {$tableName} WHERE {$tableName}_id={$id}");
            $query->execute();
        } else {
            $query = $connection->query("SELECT * FROM $tableName");
        }
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
}
