<?php

namespace App\Controllers;

class Player implements ControllersInterface
{
    public function getWelcome(): string
    {
        return 'Welcome to the player page!';
    }
}
