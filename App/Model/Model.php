<?php

namespace App\Model;

class Model
{
    protected $data = [];
    protected $tableName = '';

    public function getData(): iterable
    {
        return $this->data;
    }

    public function setData(array $data): void
    {
        $this->data = $data;
    }

    public function getTableName(): string
    {
        return $this->tableName;
    }

    public function setTableName(string $tableName): void
    {
        $this->tableName = $tableName;
    }
}
