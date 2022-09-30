<?php

namespace App\Blocks;

class ManagerBlock extends BlockParent
{
    protected $includedFileName = APP_ROOT . '/view/manager.phtml';
    protected $includedStyles = ["css/styles/manager/manager.css"];

    public function getHeader(): iterable
    {
        return ['id', 'clubId', 'boss', 'name', 'surname', 'birthDate', 'position'];
    }
}
