<?php

namespace App\Controllers;

use App\Blocks\ChampionshipBlock;

class Championship implements ControllersInterface
{
    public function execute()
    {
        $championshipBlock = new ChampionshipBlock();
        $championshipBlock->render();
    }
}
