<?php

namespace App\Repository;

use App\Model\ClubModel;

class ClubRepository extends Repository
{
    protected $model;

    public function __construct()
    {
        $this->model = new ClubModel();
    }
}
