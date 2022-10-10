<?php

namespace App\Repository;

use App\Resource\Resource;

class Repository
{
    protected $model;

    public function getById(int $id)
    {
        $this->model->setData(Resource::getTableData($this->model->getTableName(), $id));
        return $this->model;
    }

    public function getAllData()
    {
        $this->model->setData(Resource::getTableData($this->model->getTableName()));
        return $this->model;
    }
}
