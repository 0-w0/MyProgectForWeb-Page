<?php

namespace App\Repository;

use App\Model\CountryModel;

class CountryRepository extends Repository
{
    public function __construct()
    {
        $this->model = new CountryModel();
    }
}
