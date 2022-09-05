<?php

namespace App\Blocks;

abstract class BlockParent
{
    private $templatePath = APP_ROOT . '/view/struct.phtml';
//    private $reqFileName;
//    private $reqStyles;
//
//    public function __construct($reqFileName, $reqStyles)
//    {
//        $this->reqFileName = $reqFileName;
//        $this->reqStyles = $reqStyles;
//    }

//    public function getReqFileName(): string
//    {
//        return $this->reqFileName;
//    }
//
//    public function getReqStyles(): iterable
//    {
//        return $this->reqStyles;
//    }

    public function render()
    {
        require $this->templatePath;
    }
}
