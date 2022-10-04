<?php

namespace App\Controllers;

use App\Blocks\PlayerBlock;
use App\Model\PlayerModel;
use App\Resource\Resource;

use App\Database\Database;
class Player implements ControllersInterface
{
    public function execute()
    {
        $playerModel = new PlayerModel();
        if ($_GET['id'] != '') {
            $playerModel->setData(Resource::getSingle($playerModel->getTableName(), $_GET['id']));
        }
        else {
            $playerModel->setData(Resource::getConnection($playerModel->getTableName()));
        }
        $playerBlock = new PlayerBlock();
        $playerBlock->render($playerModel);
    }
}
