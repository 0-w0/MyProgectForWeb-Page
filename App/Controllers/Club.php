<?php

namespace App\Controllers;

use App\Blocks\ClubBlock;
use App\Resource\Resource;

class Club implements ControllersInterface
{
    private $tableName = 'club';

    public function execute()
    {
        $model = Resource::getConnection($this->tableName);
        $clubBlock = new ClubBlock();
        $clubBlock->setContent($model->getData())->render();
    }
}
