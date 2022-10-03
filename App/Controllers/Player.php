<?php

namespace App\Controllers;

use App\Blocks\PlayerBlock;
use App\Model\PlayerModel;
use App\Resource\Resource;

class Player implements ControllersInterface
{
    public function execute()
    {
        $playerModel = new PlayerModel();
        $playerModel->setData(Resource::getConnection($playerModel->getTableName()));
        $playerBlock = new PlayerBlock();
        $playerBlock->render($playerModel);
    }
}
