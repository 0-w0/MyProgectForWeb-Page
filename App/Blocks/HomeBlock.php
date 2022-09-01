<?php

namespace App\Blocks;

class HomeBlock implements BlockInterface
{
    private $reqFileName = APP_ROOT . '/view/home.phtml';
    private $reqStyles = [
    ];

    public function render()
    {
        require APP_ROOT . '/view/struct.phtml';
    }

    public function getContent(): iterable
    {
        return [
            ['news 1', 'para1', 'para2', 'para3'],
            ['news 2', 'para1', 'para2', 'para3', 'para4'],
            ['news 3', 'para1', 'para2'],
            ['news 4', 'para1', 'para2', 'para3', 'para4', 'para5'],
            ['news 5', 'para1'],
        ];
    }
}
