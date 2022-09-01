<?php

namespace App\Controllers;

use App\Blocks\CountryBlock;

class Country implements ControllersInterface
{
    public function execute()
    {
        $countryBlock = new CountryBlock();
        $countryBlock->render();
    }
}
