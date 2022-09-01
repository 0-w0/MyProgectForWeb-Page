<?php

namespace App\Controllers;

use App\Blocks\HomeBlock;

class HomePage implements ControllersInterface
{
    public function execute()
    {
        $homeBlock = new HomeBlock();
        $homeBlock->render();
    }
}
