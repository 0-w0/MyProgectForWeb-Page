<?php

namespace App\Blocks;

class CountryBlock extends BlockParent implements BlockInterface
{
    protected $data = [];
    protected $includedFileName = APP_ROOT . '/view/country.phtml';
    protected $includedStyles = ["css/styles/country/country.css"];

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
