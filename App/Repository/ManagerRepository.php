<?php

namespace App\Repository;

use App\Model\ManagerModel;

class ManagerRepository extends Repository
{
    protected $model;

    public function __construct()
    {
        $this->model = new ManagerModel();
    }
}
