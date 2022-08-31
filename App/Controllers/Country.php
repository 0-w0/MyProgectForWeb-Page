<?php

namespace App\Controllers;

class Country implements ControllersInterface
{
    public function getWelcome(): string
    {
        return 'Welcome to the country page!';
    }
}
