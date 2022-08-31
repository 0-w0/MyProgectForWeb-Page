<?php

namespace App\Controllers;

class ErrorPage implements ControllersInterface
{
    public function getWelcome(): string
    {
        return 'No such page here!';
    }
}
