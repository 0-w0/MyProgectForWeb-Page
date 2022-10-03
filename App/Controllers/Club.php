<?php

namespace App\Controllers;

use App\Blocks\ClubBlock;
use App\Model\ClubModel;
use App\Resource\Resource;

class Club implements ControllersInterface
{
    public function execute()
    {
        $clubModel = new ClubModel();
        $clubModel->setData(Resource::getConnection($clubModel->getTableName()));
        $clubBlock = new ClubBlock();
        $clubBlock->render($clubModel);
    }
}
