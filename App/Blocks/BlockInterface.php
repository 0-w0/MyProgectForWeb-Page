<?php

namespace App\Blocks;

use App\Model\Model;

interface BlockInterface
{
    public function render(Model $model);
    public function getContent(): iterable;
}