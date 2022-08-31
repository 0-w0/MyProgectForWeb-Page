<?php

namespace App\Controllers;

class HomePage implements ControllersInterface
{
    public function getWelcome(): string
    {
        return 'Welcome to the home page!';
    }
}
