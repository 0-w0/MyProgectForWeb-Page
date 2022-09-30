<?php

namespace App\Blocks;

interface BlockInterface
{
    public function render();
    public function getContent(): iterable;
    public function setContent(iterable $data);
}