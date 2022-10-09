<?php

namespace App\Controllers;

use App\Model\Environment;
use App\Resource\AddClubAddResource;

class AddClub
{
    public function execute()
    {
        $name = $_POST['name'];

        if ($name) {
            $addClubResource = new AddClubAddResource();
            $addClubResource->executeQuery($name);
        }
        echo $_POST['name'].' was added';
        header("Location: ".Environment::getInstance()->getBaseUrl()."/club", true, 304);
    }
}
