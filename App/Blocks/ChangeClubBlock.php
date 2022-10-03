<?php

namespace App\Blocks;

use App\Model\Model;

class ChangeClubBlock extends BlockParent
{
    protected $includedFileName = APP_ROOT . '/view/changeClub.phtml';
    protected $includedStyles = [];

    public function getId()
    {
        foreach ($this->getContent() as $content)
            return $content;
        return null;
    }

    public function getName()
    {
        $a = 0;
        foreach ($this->getContent() as $content)
            $a = $content;
        return $a;
    }
}
