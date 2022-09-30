<?php

namespace App\Controllers;

use App\Blocks\ManagerBlock;
use App\Resource\Resource;

class Manager implements ControllersInterface
{
    private $tableName = 'manager';

    public function execute()
    {
        $model = Resource::getConnection($this->tableName);
        $managerBlock = new ManagerBlock();
        $managerBlock->setContent($model->getData())->render();
    }
}
