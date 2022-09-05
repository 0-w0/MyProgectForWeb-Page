<?php

namespace App\Controllers;

use App\Blocks\BlockParent;

class ErrorPage implements ControllersInterface
{
    private $includedFileName = APP_ROOT . '/view/404.phtml';
    private $includedStyles = [
        "css/styles/404/error-page.css"
    ];
    private $linkAddress = APP_ROOT . '/css/styles/common/common.css';

    public function execute()
    {
        require APP_ROOT . '/view/struct.phtml';
    }
}
