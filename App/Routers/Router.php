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
        switch ($path) {
            case '/':
            {
                return new HomePage();
            }

            case '/championship/add':
            {
                return new AddChampionship();
            }

            case '/club/add':
            {
                return new AddClub();
            }

            case '/club/changeSubmit':
            {
                return new ChangeSubmit();
            }
        }

        if(preg_match("/\\/club\\/change.*[1-9]+/", $path)) {
            return new ChangeClub();
        }

        if(preg_match("/\\/player(.*[1-9]+|)/", $path)) {
            return new Player();
        }

        if(preg_match("/\\/championship(.*[1-9]+|)/", $path)) {
            return new Championship();
        }

        if(preg_match("/\\/club(.*[1-9]+|)/", $path)) {
            return new Club();
        }

        if(preg_match("/\\/manager(.*[1-9]+|)/", $path)) {
            return new Manager();
        }

        if(preg_match("/\\/country(.*[1-9]+|)/", $path)) {
            return new Country();
        }

        return new ErrorPage();
    }
}
