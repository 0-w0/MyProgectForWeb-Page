<?php

namespace App\Blocks;

class PlayerBlock extends BlockParent
{
    protected $includedFileName = APP_ROOT . '/view/player.phtml';
    protected $includedStyles = ["css/styles/player/player.css"];

    public function getHeader(): iterable
    {
        return ['id', 'clubId', 'name', 'surname', 'birthDate', 'position',];
    }
}
