<?php

namespace App\Blocks;

interface BlockInterface
{
    public function render();
    public function getContent(): iterable;
}