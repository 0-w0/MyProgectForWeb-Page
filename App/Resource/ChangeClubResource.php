<?php

namespace App\Resource;

use App\Database\Database;

class ChangeClubResource extends AddResourceParent
{

    public function executeQuery($id)
    {
        $connection = Database::getConnection();
        $query = $connection->prepare("SELECT * FROM club WHERE club_id=:id");
        $query->bindParam(":id", $id);
        $query->execute();
        return $query->fetch(\PDO::FETCH_ASSOC);
    }
}
