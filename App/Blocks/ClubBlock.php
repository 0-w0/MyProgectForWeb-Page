<?php

namespace App\Blocks;

class ClubBlock extends BlockParent
{
    protected $includedFileName = APP_ROOT . '/view/club.phtml';
    protected $includedStyles = ["css/styles/club/club.css"];

    public function getHeader(): iterable
    {
        return ['id', 'name',];
    }
}
