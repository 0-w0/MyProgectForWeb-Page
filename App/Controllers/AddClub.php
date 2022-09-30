<?php

namespace App\Controllers;

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
        header('Location: http://localhost:8080/club', true, 304);
        die();
    }
}
