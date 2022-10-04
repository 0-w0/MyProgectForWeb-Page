<?php

namespace App\Controllers;

use App\Blocks\PlayerBlock;
use App\Repository\PlayerRepository;

class Player implements ControllersInterface
{
    public function execute()
    {
        $playerRepository = new PlayerRepository();
        if ($_GET['id'] != '') {
            $playerModel = $playerRepository->getById($_GET['id']);
        }
        else {
            $playerModel = $playerRepository->getAllData();
        }
        $playerBlock = new PlayerBlock();
        $playerBlock->render($playerModel);
    }
}
