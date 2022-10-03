<?php

namespace App\Controllers;

use App\Resource\ChangeSubmitResource;

class ChangeSubmit
{
    public function execute()
    {
        $name = $_POST['name'];
        $id = $_POST['id'];
        $ChangeSubmitResource = new ChangeSubmitResource();
        $ChangeSubmitResource->executeQuery($name, $id);
        echo $_POST['name'].' was changed';
        header('Location: http://localhost:8080/club', true, 304);
        die();
    }
}