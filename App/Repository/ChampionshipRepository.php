<?php

namespace App\Repository;

use App\Model\ChampionshipModel;

class ChampionshipRepository extends Repository
{
    protected $model;

    public function __construct()
    {
        $this->model = new ChampionshipModel();
    }
}
