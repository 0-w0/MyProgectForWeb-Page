<?php

namespace App\Controllers;

use App\Blocks\ChampionshipBlock;
use App\Resource\Resource;

class Championship implements ControllersInterface
{
    private $tableName = 'championship';

    public function execute()
    {
        $model = Resource::getConnection($this->tableName);
        $championshipBlock = new ChampionshipBlock();
        $championshipBlock->setContent($model->getData())->render();
    }
}
