<?php

namespace App\Routers;

use App\Controllers\AddClub;
use App\Controllers\ChangeClub;
use App\Controllers\ChangeSubmit;
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
        if(preg_match("/\\/club\\/change.*[1-9]+/", $path)) {
            return new ChangeClub();
        }

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

            case '/club/changeSubmit': {
                return new ChangeSubmit();
            }

            default: {
                return new ErrorPage();
            }
        }
    }
}
