<?php

namespace App\Controllers;

use App\Blocks\ClubBlock;
use App\Repository\ClubRepository;

class Club implements ControllersInterface
{
    public function execute()
    {
        $clubRepository = new ClubRepository();
        if ($_GET['id'] != '') {
            $clubModel = $clubRepository->getById($_GET['id']);
        }
        else {
            $clubModel = $clubRepository->getAllData();
        }
        $clubBlock = new ClubBlock();
        $clubBlock->render($clubModel);
    }
}
