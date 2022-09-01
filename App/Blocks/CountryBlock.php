<?php

namespace App\Blocks;

class CountryBlock implements BlockInterface
{
    private $reqFileName = APP_ROOT . '/view/country.phtml';
    private $reqStyles = [

    ];

    public function render()
    {
        require APP_ROOT . '/view/struct.phtml';
    }

    public function getContent(): iterable
    {
        return [
            ['country1', 'awesome and huge description 1'],
            ['country2', 'awesome and huge description 2'],
            ['country3', 'awesome and huge description 3'],
            ['country4', 'awesome and huge description 4'],
            ['country5', 'awesome and huge description 5'],
        ];
    }
}
