<?php

namespace App\Routers;

use App\Controllers\AddClub;
use App\Controllers\HomePage;
use App\Controllers\Championship;
use App\Controllers\Club;
use App\Controllers\Player;
use App\Controllers\Manager;
use App\Controllers\Country;
use App\Controllers\ErrorPage;
use App\Controllers\AddChampionship;

class Router
{
    public function switchControllers(string $path)
    {
        switch ($path) {
            case '/': {
                return new HomePage();
            }

            case '/championship': {
                return new Championship();
            }

            case '/club': {
                return new Club();
            }

            case '/player': {
                return new Player();
            }

            case '/manager': {
                return new Manager();
            }

            case '/country': {
                return new Country();
            }

            case '/championship/add': {
                return new AddChampionship();
            }

            case '/club/add': {
                return new AddClub();
            }

            default: {
                return new ErrorPage();
            }
        }
    }
}
