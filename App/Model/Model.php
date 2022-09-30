<?php

namespace App\Model;

class Model
{
    protected $data = [];

    public function getData(): iterable
    {
        return $this->data;
    }

    public function setData(array $data): void
    {
        $this->data = $data;
    }
}
