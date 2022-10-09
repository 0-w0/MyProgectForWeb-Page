<?php

namespace App\Resource;

use App\Database\Database;

class DeleteChampionshipResource
{
    public function executeQuery($id)
    {
        $connection = Database::getConnection();
        $query = $connection->prepare("DELETE FROM championship WHERE championship_id=:id");
        $query->bindParam(":id", $id);
        $query->execute();
    }
}
