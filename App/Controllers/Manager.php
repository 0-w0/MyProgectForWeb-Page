<?php

namespace App\Controllers;

use App\Blocks\ManagerBlock;
use App\Repository\ManagerRepository;

class Manager implements ControllersInterface
{
    public function execute()
    {
        $managerRepository = new ManagerRepository();
        if ($_GET['id'] != '') {
            $managerModel = $managerRepository->getById($_GET['id']);
        }
        else {
            $managerModel = $managerRepository->getAllData();
        }
        $managerBlock = new ManagerBlock();
        $managerBlock->render($managerModel);
    }
}
