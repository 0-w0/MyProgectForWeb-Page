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
use App\Controllers\DeleteChampionship;

class Router
{
    protected static $routesWithIdMap = [
        '/' => HomePage::class,
        '/championship/add' => AddChampionship::class,
        '/club/add' => AddClub::class,
        '/club/changeSubmit' => ChangeSubmit::class,
        "/championship/delete" => DeleteChampionship::class,
        '/club/change' => ChangeClub::class,
        '/player' => Player::class,
        '/championship' => Championship::class,
        '/club' => Club::class,
        '/manager' => Manager::class,
        '/country' => Country::class,
    ];

    public function switchControllers(string $path)
    {
        if (strstr($path, '?')) {
            $path = strstr($path, '?', true);
        }

        foreach (Router::$routesWithIdMap as $route => $controllerClass) {
            if ($route == $path) {
                return new $controllerClass;
            }
        }

        return new ErrorPage();
    }
}
