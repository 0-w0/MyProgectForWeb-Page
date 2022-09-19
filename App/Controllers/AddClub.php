<?php

namespace App\Controllers;

use App\Database\Database;

class AddClub
{
    public function execute()
    {
        $connection = Database::getConnection();
        $query = 'INSERT INTO club (name) VALUES (?)';
        $smth = $connection->prepare($query);

        $name = $_POST['name'];

        if ($name) {
            $smth->execute([$name]);
        }
        echo $_POST['name'].' was added';
        header('Location: http://localhost:8080/club', true, 304);
        die();
    }
}
