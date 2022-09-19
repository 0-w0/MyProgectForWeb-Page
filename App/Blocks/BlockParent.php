<?php

namespace App\Blocks;

abstract class BlockParent
{
    private $templatePath = APP_ROOT . '/view/struct.phtml';

    public function render()
    {
        require $this->templatePath;
    }
}
