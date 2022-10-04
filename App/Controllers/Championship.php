<?php

namespace App\Controllers;

use App\Blocks\ChampionshipBlock;
use App\Model\ChampionshipModel;
use App\Resource\Resource;

class Championship implements ControllersInterface
{
    public function execute()
    {
        $championshipModel = new ChampionshipModel();
        if ($_GET['id'] != '') {
            $championshipModel->setData(Resource::getSingle($championshipModel->getTableName(), $_GET['id']));
        }
        else {
            $championshipModel->setData(Resource::getConnection($championshipModel->getTableName()));
        }
        $championshipBlock = new ChampionshipBlock();
        $championshipBlock->render($championshipModel);
    }
}
