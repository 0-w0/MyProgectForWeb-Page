<?php

namespace App\Controllers;

use App\Blocks\ManagerBlock;
use App\Model\ManagerModel;
use App\Resource\Resource;

class Manager implements ControllersInterface
{
    public function execute()
    {
        $managerModel = new ManagerModel();
        if ($_GET['id'] != '') {
            $managerModel->setData(Resource::getSingle($managerModel->getTableName(), $_GET['id']));
        }
        else {
            $managerModel->setData(Resource::getConnection($managerModel->getTableName()));
        }
        $managerBlock = new ManagerBlock();
        $managerBlock->render($managerModel);
    }
}
