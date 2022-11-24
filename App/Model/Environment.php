<?php

namespace App\Model;

final class Environment
{
    private static $instance = null;
    private $settings;

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

    public function getHeader(string $path): void
    {
        header('Location: '.Environment::getInstance()->getBaseUrl()."$path");
    }

    private function getBaseUrl(): string
    {
        return $this->settings['PORT'] ?? '';
    }

    private function __construct()
    {
        $this->settings = parse_ini_file(APP_ROOT . '/.env');
    }

    private function __clone()
    {
    }
}
