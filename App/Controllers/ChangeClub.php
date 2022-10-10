<?php

namespace App\Controllers;

use App\Blocks\ChangeClubBlock;
use App\Resource\ChangeClubResource;
use App\Model\ChangeClubModel;

class ChangeClub
{
    public function execute()
    {
        $id = $_GET['id'] ?? '';

        if ($id) {
            $addClubResource = new ChangeClubResource();
            $name = $addClubResource->executeQuery($id);
            $changeClubModel = new ChangeClubModel();
            $changeClubModel->setSpecificData($id, $name);
            $changeClubBlock = new ChangeClubBlock();
            $changeClubBlock->render($changeClubModel);
        }
    }
}