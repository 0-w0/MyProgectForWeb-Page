<?php

namespace App\Blocks;

class ChangeClubBlock extends BlockParent
{
    protected $includedFileName = APP_ROOT . '/view/changeClub.phtml';
    protected $includedStyles = [];

    public function getId()
    {
        return $this->model->getClubId();
    }

    public function getName()
    {
        return $this->model->getClubName();
    }
}
