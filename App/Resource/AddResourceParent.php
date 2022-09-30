<?php

namespace App\Resource;

use App\Database\Database;

class AddResourceParent
{
    protected $query = '';

    protected function prepareQuery()
    {
        $connection = Database::getConnection();
        return $connection->prepare($this->query);
    }
}
