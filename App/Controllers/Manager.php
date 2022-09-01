<?php

namespace App\Controllers;

use App\Blocks\ManagerBlock;

class Manager implements ControllersInterface
{
    public function execute()
    {
        $managerBlock = new ManagerBlock();
        $managerBlock->render();
    }
}
