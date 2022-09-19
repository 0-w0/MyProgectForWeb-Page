<?php

namespace App\Blocks;

class ChampionshipBlock extends BlockParent implements BlockInterface
{
    protected $data = [];
    protected $includedFileName = APP_ROOT . '/view/championship.phtml';
    protected $includedStyles = [
        "css/styles/common/main-table.css",
        "css/styles/championship/championship.css"
    ];

    public function getHeader(): iterable
    {
        return ['id', 'name', 'country', 'beginDate', 'endDate',];
    }

    public function setContent(iterable $data): self
    {
        $this->data = $data;
        return $this;
    }

    public function getContent(): iterable
    {
        return $this->data;
    }
}
