<?php

namespace App\Controllers;

use App\Blocks\CountryBlock;
use App\Database\Database;
use App\Resource\Resource;

class Country implements ControllersInterface
{
    private $tableName = 'country';

    public function execute()
    {
        $model = Resource::getConnection($this->tableName);
        $countryBlock = new CountryBlock();
        $countryBlock->setContent($model->getData())->render();
    }
}
