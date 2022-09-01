<?php

namespace App\Controllers;

use App\Blocks\ClubBlock;

class Club implements ControllersInterface
{
    public function execute()
    {
        $clubBlock = new ClubBlock();
        $clubBlock->render();
    }
}
