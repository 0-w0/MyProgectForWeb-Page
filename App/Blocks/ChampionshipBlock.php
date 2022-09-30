<?php

namespace App\Blocks;

class ChampionshipBlock extends BlockParent
{
    protected $includedFileName = APP_ROOT . '/view/championship.phtml';
    protected $includedStyles = [
        "css/styles/common/main-table.css",
        "css/styles/championship/championship.css"
    ];

    public function getHeader(): iterable
    {
        return ['id', 'name', 'country', 'beginDate', 'endDate',];
    }
}
