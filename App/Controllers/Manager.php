<?php

namespace App\Controllers;

use App\Blocks\ManagerBlock;
use App\Database\Database;

class Manager implements ControllersInterface
{
    public function execute()
    {
        $connection = Database::getConnection();
        $query = $connection->query('SELECT * FROM manager');

        $managerBlock = new ManagerBlock();
        $managerBlock->setContent($query->fetchAll())->render();
    }
}
