<?php

namespace App\Database;

use App\Model\Environment;

class Database
{
    protected static $connection;

    public static function getConnection(): \PDO
    {
        if (self::$connection) {
            return self::$connection;
        }

        if (self::$connection) {
            return self::$connection;
        }

        $environment = Environment::getInstance();

        $host = $environment->getDatabaseHost();
        $db   = $environment->getDatabaseName();
        $user = $environment->getDatabaseUser();
        $pass = $environment->getDatabasePassword();
        $charset = $environment->getDatabaseCharset();

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        self::$connection = new \PDO($dsn, $user, $pass, $opt);
        return self::$connection;
    }

}
