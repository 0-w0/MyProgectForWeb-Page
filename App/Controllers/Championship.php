<?php

namespace App\Controllers;

use App\Blocks\ChampionshipBlock;
use App\Database\Database;

class Championship implements ControllersInterface
{
    public function execute()
    {
        $connection = Database::getConnection();
        $query = $connection->query('SELECT * FROM championship');

        $championshipBlock = new ChampionshipBlock();
        $championshipBlock->setContent($query->fetchAll())->render();
    }
}
