<?php

namespace App\Controllers;

use App\Blocks\PlayerBlock;

class Player implements ControllersInterface
{
    public function execute()
    {
        $playerBlock = new PlayerBlock();
        $playerBlock->render();
    }
}
