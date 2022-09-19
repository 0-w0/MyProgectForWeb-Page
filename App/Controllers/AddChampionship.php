<?php

namespace App\Controllers;

use App\Database\Database;

class AddChampionship
{
    public function execute()
    {
        $connection = Database::getConnection();
        $query = 'INSERT INTO championship (name, country_id, begin_date, end_date)
            VALUES (?, ?, ?, ?)';
        $smth = $connection->prepare($query);

        $name = $_POST['name'] ?? '';
        $countryId = $_POST['country_id'] ?? '';
        $beginDate = $_POST['begin_date'] ?? '';
        $endDate = $_POST['end_date'] ?? '';

        $smth->execute([$name, $countryId, $beginDate, $endDate]);
        echo $_POST['name'].' was added';
        header('Location: http://localhost:8080/championship', true, 304);
        die();
    }
}
