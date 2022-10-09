<?php

namespace App\Controllers;

use App\Model\Environment;
use App\Resource\AddChampionshipAddResource;

class AddChampionship
{
    public function execute()
    {
        $name = $_POST['name'] ?? '';
        $countryId = $_POST['country_id'] ?? '';
        $beginDate = $_POST['begin_date'] ?? '';
        $endDate = $_POST['end_date'] ?? '';

        $addChampionshipResource = new AddChampionshipAddResource();
        $addChampionshipResource->executeQuery($name, $countryId, $beginDate, $endDate);

        echo $_POST['name'].' was added';
        header("Location: ".Environment::getInstance()->getBaseUrl()."/championship", true, 304);
    }
}
