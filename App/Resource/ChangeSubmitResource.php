<?php

namespace App\Resource;

use App\Database\Database;

class ChangeSubmitResource
{
    public function executeQuery($name, $id)
    {
        $connection = Database::getConnection();
        $query = $connection->prepare("UPDATE club SET name='{$name}' WHERE club_id={$id}");
        $query->execute();
        return $this;
    }
}
