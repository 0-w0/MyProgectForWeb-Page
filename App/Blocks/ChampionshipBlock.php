<?php

namespace App\Blocks;

class ChampionshipBlock implements BlockInterface
{
    private $reqFileName = APP_ROOT . '/view/championship.phtml';
    private $reqStyles = [
    ];

    public function render()
    {
        require APP_ROOT . '/view/struct.phtml';
    }

    public function getHeader(): iterable
    {
        return ['id', 'name', 'country', 'beginDate', 'endDate',];
    }

    public function getContent(): iterable
    {
        return [
            ['1', 'Very Important Competition', 'Brazil', '10.10.2010', '10.10.2011'],
            ['2', 'Very Important Competition', 'Italy', '10.10.2010', '10.10.2011'],
            ['3', 'Very Important Competition', 'France', '10.10.2010', '10.10.2011'],
            ['4', 'Very Important Competition', 'Egypt', '10.10.2010', '10.10.2011'],
            ['5', 'Very Important Competition', 'Japan', '10.10.2010', '10.10.2011']
        ];
    }
}
