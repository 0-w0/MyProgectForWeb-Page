<?php

namespace App\Resource;

class AddClubAddResource extends AddResourceParent
{
    protected $query = 'INSERT INTO club (name) VALUES (?)';

    public function executeQuery($name)
    {
        $this->prepareQuery()->execute([$name]);
    }
}
