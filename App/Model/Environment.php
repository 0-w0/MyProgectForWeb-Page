<?php

namespace App\Model;

final class Environment
{
    private static $instance = null;
    private $settings;

    private function __construct()
    {
        $this->settings = parse_ini_file(APP_ROOT . '/.env');
    }

    public static function getInstance(): Environment
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getDatabaseHost(): string
    {
        return $this->settings['HOST'] ?? '';
    }

    public function getDatabaseName(): string
    {
        return $this->settings['DATABASE'] ?? '';
    }

    public function getDatabaseUser(): string
    {
        return $this->settings['USER'] ?? '';
    }

    public function getDatabasePassword(): string
    {
        return $this->settings['PASSWORD'] ?? '';
    }

    public function getDatabaseCharset(): string
    {
        return $this->settings['CHARSET'] ?? '';
    }

    public function getBaseUrl(): string
    {
        return $this->settings['PORT'] ?? '';
    }

    private function __clone()
    {
    }
}
