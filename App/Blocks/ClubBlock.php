<?php

namespace App\Blocks;

class ClubBlock implements BlockInterface
{
    private $reqFileName = APP_ROOT . '/view/club.phtml';
    private $reqStyles = [

    ];

    public function render()
    {
        require APP_ROOT . '/view/struct.phtml';
    }

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
