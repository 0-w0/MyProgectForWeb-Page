<?php

namespace App\Blocks;

use App\Model\ChangeClubModel;
use App\Model\Model;

abstract class BlockParent implements BlockInterface
{
    protected $templatePath = APP_ROOT . '/view/struct.phtml';
    protected $model;
    protected $data = [];

    public function render(Model $model = null)
    {
        if ($model != null) {
            $this->setContent($model->getData());
            $this->model = $model;
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
