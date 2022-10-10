<?php

namespace App\Controllers;

use App\Model\Environment;
use App\Resource\DeleteChampionshipResource;

class DeleteChampionship
{
    protected $redirectPath = '/championship';

    public function execute()
    {
        $id = $_GET['id'] ?? '';
        if ($id) {
            $deleteChampionshipResource = new DeleteChampionshipResource();
            $deleteChampionshipResource->executeQuery($id);
        }
        Environment::getInstance()->getHeader($this->redirectPath);
    }
}
