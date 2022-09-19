<?php

namespace App\Blocks;

class PlayerBlock extends BlockParent implements BlockInterface
{
    protected $data = [];
    protected $includedFileName = APP_ROOT . '/view/player.phtml';
    protected $includedStyles = ["css/styles/player/player.css"];

    public function getHeader(): iterable
    {
        return ['id', 'clubId', 'name', 'surname', 'birthDate', 'position',];
    }

    public function setContent(iterable $data): self
    {
        $this->data = $data;
        return $this;
    }

    public function getContent(): iterable
    {
        return $this->data;
    }
}
