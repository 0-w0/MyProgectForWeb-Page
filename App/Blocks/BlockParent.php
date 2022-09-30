<?php

namespace App\Blocks;

abstract class BlockParent implements BlockInterface
{
    private $templatePath = APP_ROOT . '/view/struct.phtml';
    protected $data = [];

    public function render(): self
    {
        require $this->templatePath;
        return $this;
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
