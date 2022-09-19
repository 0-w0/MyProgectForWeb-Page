<?php

namespace App\Blocks;

class ClubBlock extends BlockParent implements BlockInterface
{
    protected $data = [];
    protected $includedFileName = APP_ROOT . '/view/club.phtml';
    protected $includedStyles = ["css/styles/club/club.css"];

    public function getHeader(): iterable
    {
        return ['id', 'name',];
    }

    public function getContent(): iterable
    {
        return $this->data;
    }

    public function setContent(iterable $data): self
    {
        $this->data = $data;
        return $this;
    }
}
