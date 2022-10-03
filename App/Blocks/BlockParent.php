<?php

namespace App\Blocks;

use App\Model\Model;

abstract class BlockParent implements BlockInterface
{
    protected $templatePath = APP_ROOT . '/view/struct.phtml';
    protected $data = [];

    public function render(Model $model = null)
    {
        if ($model != null) {
            $this->setContent($model->getData());
        }
        require $this->templatePath;
        return $this;
    }

    public function getContent(): iterable
    {
        return $this->data;
    }

    protected function setContent(iterable $data): self
    {
        $this->data = $data;
        return $this;
    }
}
