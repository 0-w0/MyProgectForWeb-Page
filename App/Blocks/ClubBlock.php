<?php

namespace App\Blocks;

class ClubBlock extends BlockParent implements BlockInterface
{
    protected $includedFileName = APP_ROOT . '/view/club.phtml';
    protected $includedStyles = ["css/styles/club/club.css"];

    public function getHeader(): iterable
    {
        return ['id', 'name',];
    }

    public function getContent(): iterable
    {
        return [
            ['1', 'North Club'],
            ['2', 'South Club'],
            ['3', 'West Club'],
            ['4', 'East Club'],
        ];
    }
}
