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
        if ($_GET['id'] != '') {
            $clubModel->setData(Resource::getSingle($clubModel->getTableName(), $_GET['id']));
        }
        else {
            $clubModel->setData(Resource::getConnection($clubModel->getTableName()));
        }
        $clubBlock = new ClubBlock();
        $clubBlock->render($clubModel);
    }
}
