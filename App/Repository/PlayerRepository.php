<?php

namespace App\Repository;

use App\Model\PlayerModel;

class PlayerRepository extends Repository
{
    protected $model;

    public function __construct()
    {
        $this->model = new PlayerModel();
    }
}
