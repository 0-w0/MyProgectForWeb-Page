<?php

namespace App\Resource;

class AddChampionshipAddResource extends AddResourceParent
{
    protected $query = 'INSERT INTO championship (name, country_id, begin_date, end_date)
            VALUES (?, ?, ?, ?)';

    public function executeQuery($name, $countryId, $beginDate, $endDate)
    {
        $this->prepareQuery()->execute([$name, $countryId, $beginDate, $endDate]);
    }
}
