<?php

namespace App\Controllers;

class Championship implements ControllersInterface
{
    public function getWelcome(): string
    {
        return 'Welcome to the championship page!';
    }
}
