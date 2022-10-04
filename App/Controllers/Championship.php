<?php

namespace App\Controllers;

use App\Blocks\ChampionshipBlock;
use App\Repository\ChampionshipRepository;
use App\Model\ChampionshipModel;
use App\Resource\Resource;

class Championship implements ControllersInterface
{
    public function execute()
    {
        $championshipRepository = new ChampionshipRepository();
        if ($_GET['id'] != '') {
            $championshipModel = $championshipRepository->getById($_GET['id']);
        }
        else {
            $championshipModel = $championshipRepository->getAllData();
        }
        $championshipBlock = new ChampionshipBlock();
        $championshipBlock->render($championshipModel);
    }
}
