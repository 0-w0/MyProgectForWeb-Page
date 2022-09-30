<?php

namespace App\Controllers;

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
        header('Location: http://localhost:8080/championship', true, 304);
        die();
    }
}
