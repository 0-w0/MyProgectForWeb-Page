<?php

namespace App\Blocks;

class ManagerBlock extends BlockParent implements BlockInterface
{
    protected $includedFileName = APP_ROOT . '/view/manager.phtml';
    protected $includedStyles = ["css/styles/manager/manager.css"];

    public function getHeader(): iterable
    {
        return ['id', 'clubId', 'boss', 'name', 'surname', 'birthDate', 'position'];
    }

    public function getContent(): iterable
    {
        return [
            ['1', '1', 'James', 'Rick', 'Smith', '12.01.1990', 'somebody'],
            ['2', '2', 'James', 'Bob', 'Smith', '12.01.1991', 'somebody'],
            ['3', '1', 'James', 'Rob', 'Smith', '12.01.1992', 'somebody'],
            ['4', '3', 'James', 'Nick', 'Smith', '12.01.1980', 'somebody'],
            ['5', '5', 'James', 'Bruce', 'Smith', '12.01.1970', 'somebody'],
            ['6', '1', 'James', 'Evelin', 'Smith', '12.01.1989', 'somebody'],
        ];
    }
}
