<?php

namespace App\Controllers;

use App\Model\Environment;
use App\Resource\AddClubAddResource;

class AddClub
{
    protected $redirectPath = '/club';

    public function execute()
    {
        $name = $_POST['name'] ?? '';

        if ($name) {
            $addClubResource = new AddClubAddResource();
            $addClubResource->executeQuery($name);
        }
        echo $_POST['name'].' was added';
        Environment::getInstance()->getHeader($this->redirectPath);
    }
}
