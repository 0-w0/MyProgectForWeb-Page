<?php

namespace App\Blocks;

class CountryBlock extends BlockParent
{
    protected $includedFileName = APP_ROOT . '/view/country.phtml';
    protected $includedStyles = ["css/styles/country/country.css"];
}
