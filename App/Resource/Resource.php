<?php

namespace App\Resource;

use App\Database\Database;
use App\Model\Model;

class Resource
{
    static function getConnection($tableName): Model
    {
        $connection = Database::getConnection();
        $query = $connection->query("SELECT * FROM $tableName");
        $model = new Model();
        $model->setData($query->fetchAll());
        return $model;
    }
}
