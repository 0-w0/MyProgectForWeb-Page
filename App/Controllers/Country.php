<?php

namespace App\Controllers;

use App\Blocks\CountryBlock;
use App\Repository\CountryRepository;

class Country implements ControllersInterface
{
    public function execute()
    {
        $countryRepository = new CountryRepository();
        if ($_GET['id'] != '') {
            $countryModel = $countryRepository->getById($_GET['id']);
        }
        else {
            $countryModel = $countryRepository->getAllData();
        }
        $countryBlock = new CountryBlock();
        $countryBlock->render($countryModel);
    }
}
