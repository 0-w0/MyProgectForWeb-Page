<?php

namespace App\Controllers;

use App\Model\Environment;
use App\Resource\DeleteChampionshipResource;

class DeleteChampionship
{
    public function execute()
    {
        $id = $_GET['id'];
        if ($id) {
            $deleteChampionshipResource = new DeleteChampionshipResource();
            $deleteChampionshipResource->executeQuery($id);
        }
        header("Location: ".Environment::getInstance()->getBaseUrl()."/championship", true, 304);
    }
}
