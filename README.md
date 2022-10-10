# 7 MVC Anna

The project was created to introduce a web-site connected to the database including display, adding, configuration and removal of the tables entries.

## Requirements and installation

MySQL version 5.7;
PHP version 7.3;

Before usage create .env, where set all values, specified in .env.sample file.

## Usage

Use after clone and configure to startup in localhost:

```bash
    php -S localhost:8080
```

Use localhost you set on the .env file.

### Structure

Besides the main page you can visit:

```html
    /championship
    /club
    /country
    /manager
    /player
```

In each of these pages you manage add ?id= section with current id to look through the exact entry.

## Folders

Project folders is:
In root directory
* App
  All logic here.
* css
  All styles for the site here. It has the current directory for each page.
* view
  All phtml files here.

In App directory:

* Blocks
* Controllers
* Database
* Repository
* Resource
* Router

## Classes and methods

* App\Blocks\BlockParent
Fields:
```php
    protected $templatePath = APP_ROOT . '/view/struct.phtml';
    protected $model;
    protected $data = [];
```

Methods:
```php
    public function render(Model $model = null);
    public function getContent(): iterable;
    protected function setContent(iterable $data): self;
```
* App\Controllers\ControllersInterface
Methods:
```php
public function execute()
```
* App\Database\Database
Fields:
```php
    protected static $connection;
```
Methods:
```php
    public static function getConnection(): \PDO;
```
* App\Model\Model
Fields:
```php
    protected $data = [];
    protected $tableName = '';
```
Methods:
```php
    public function setData(array $data): void
    public function getTableName(): string
    public function setTableName(string $tableName): void
```
* App\Model\ChangeClubModel
This class extends App\Model\Model
Fields:
```php
    protected $clubId;
    protected $clubName;
```
Methods:
```php
    public function setSpecificData($clubId, $clubName): self;
    public function getClubId();
    public function getClubName()
```
* App\Model\Envirenment

This is final class.

Fields:
```php
    private static $instance = null;
    private $settings;
```
Methods:
```php
    public static function getInstance(): Environment;
    public function getDatabaseHost(): string;
    public function getDatabaseName(): string;
    public function getDatabaseUser(): string;
    public function getDatabasePassword(): string;
    public function getDatabaseCharset(): string;
    public function getBaseUrl(): string;
```
* App\Repository\Repository
Fields:
```php
    protected $model;
```
Methods:
```php
    public function getById(int $id);
    public function getAllData();
```
* App\Resource\Resource
Methods:
```php
    static function getConnection($tableName): iterable;
    static function getSingle($tableName, $id): iterable;
```
* App\Resource\AddResourceParent;
Fields:
```php
    protected $query = '';
```
Methods:
```php
    protected function prepareQuery();
```
* App\Routers\Router
Methods:
```php
    public function switchControllers(string $path);
```
