<?php

namespace App\Controllers;

class Club implements ControllersInterface
{
    public function getWelcome(): string
    {
        return 'Welcome to the club page!';
    }
}
