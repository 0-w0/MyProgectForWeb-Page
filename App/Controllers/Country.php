<?php

namespace App\Controllers;

use App\Blocks\CountryBlock;
use App\Model\CountryModel;
use App\Resource\Resource;

class Country implements ControllersInterface
{
    public function execute()
    {
        $countryModel = new CountryModel();
        if ($_GET['id'] != '') {
            $countryModel->setData(Resource::getSingle($countryModel->getTableName(), $_GET['id']));
        }
        else {
            $countryModel->setData(Resource::getConnection($countryModel->getTableName()));
        }
        $countryBlock = new CountryBlock();
        $countryBlock->render($countryModel);
    }
}
