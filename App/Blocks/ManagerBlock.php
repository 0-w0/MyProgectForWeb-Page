<?php

namespace App\Blocks;

class ManagerBlock extends BlockParent implements BlockInterface
{
    protected $data = [];
    protected $includedFileName = APP_ROOT . '/view/manager.phtml';
    protected $includedStyles = ["css/styles/manager/manager.css"];

    public function getHeader(): iterable
    {
        return ['id', 'clubId', 'boss', 'name', 'surname', 'birthDate', 'position'];
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
