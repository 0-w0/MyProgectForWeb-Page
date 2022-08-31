<?php

namespace App\Controllers;

class Manager implements ControllersInterface
{
    public function getWelcome(): string
    {
        return 'Welcome to the manager page!';
    }
}
