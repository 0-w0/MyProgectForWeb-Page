<?php

namespace App\Controllers;

use App\Model\Environment;
use App\Resource\ChangeSubmitResource;

class ChangeSubmit
{
    protected $redirectPath = '/club';

    public function execute()
    {
        $name = $_POST['name'] ?? '';
        $id = $_POST['id'] ?? '';
        $ChangeSubmitResource = new ChangeSubmitResource();
        $ChangeSubmitResource->executeQuery($name, $id);
        echo $_POST['name'].' was changed';
        Environment::getInstance()->getHeader($this->redirectPath);
    }
}
