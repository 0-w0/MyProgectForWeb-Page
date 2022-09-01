<?php

namespace App\Controllers;

class ErrorPage implements ControllersInterface
{
    private $reqFileName = APP_ROOT . '/view/404.phtml';
    private $reqStyles = [
        "css/styles/404/error-page.css"
    ];

    public function execute()
    {
        require APP_ROOT . '/view/struct.phtml';
    }
}
