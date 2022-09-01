<?php

namespace App\Blocks;

class PlayerBlock implements BlockInterface
{
    private $reqFileName = APP_ROOT . '/view/player.phtml';
    private $reqStyles = [
    ];

    public function render()
    {
        require APP_ROOT . '/view/struct.phtml';
    }

    public function getHeader(): iterable
    {
        return ['id', 'clubId', 'name', 'surname', 'birthDate', 'position',];
    }

    public function getContent(): iterable
    {
        return [
            ['1', '11','Alex','Smith','12.12.1999','somebody'],
            ['2', '10','Martin','Smith','13.12.1998','somebody'],
            ['3', '9','Greg','Smith','14.12.1997','somebody'],
            ['4', '8','Oleg','Smith','15.12.1996','somebody'],
            ['5', '7','Karl','Smith','16.12.1995','somebody']
        ];
    }
}
