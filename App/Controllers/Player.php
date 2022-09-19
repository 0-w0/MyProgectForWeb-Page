<?php

namespace App\Controllers;

use App\Blocks\PlayerBlock;
use App\Database\Database;

class Player implements ControllersInterface
{
    public function execute()
    {
        $connection = Database::getConnection();
        $query = $connection->query('SELECT * FROM player');

        $playerBlock = new PlayerBlock();
        $playerBlock->setContent($query->fetchAll())->render();
    }
}
