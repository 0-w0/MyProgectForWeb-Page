<?php

namespace App\Controllers;

use App\Blocks\CountryBlock;
use App\Database\Database;

class Country implements ControllersInterface
{
    public function execute()
    {
        $connection = Database::getConnection();
        $query = $connection->query('SELECT * FROM country');

        $countryBlock = new CountryBlock();
        $countryBlock->setContent($query->fetchAll())->render();
    }
}
