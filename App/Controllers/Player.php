<?php

namespace App\Controllers;

use App\Blocks\PlayerBlock;
use App\Resource\Resource;

class Player implements ControllersInterface
{
    private $tableName = 'player';

    public function execute()
    {
        $model = Resource::getConnection($this->tableName);
        $playerBlock = new PlayerBlock();
        $playerBlock->setContent($model->getData())->render();
    }
}
