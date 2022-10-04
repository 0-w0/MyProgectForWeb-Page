<?php

namespace App\Blocks;

use App\Model\Model;

class ChangeClubBlock extends BlockParent
{
    protected $includedFileName = APP_ROOT . '/view/changeClub.phtml';
    protected $includedStyles = [];

    public function getId()
    {
        return reset($this->data);
    }

    public function getName()
    {
        return end($this->data);
    }
}
