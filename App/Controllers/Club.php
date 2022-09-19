<?php

namespace App\Controllers;

use App\Blocks\ClubBlock;
use App\Database\Database;

class Club implements ControllersInterface
{
    public function execute()
    {
        $connection = Database::getConnection();
        $query = $connection->query('SELECT * FROM club');

        $clubBlock = new ClubBlock();
        $clubBlock->setContent($query->fetchAll())->render();
    }
}
