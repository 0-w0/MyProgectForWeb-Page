<?php

namespace App\Model;

class ChangeClubModel extends Model
{
    protected $clubId;
    protected $clubName;

    public function setSpecificData($clubId, $clubName): self
    {
        $this->clubId = $clubId;
        $this->clubName = $clubName;
        return $this;
    }

    public function getClubId()
    {
        return $this->clubId;
    }

    public function getClubName()
    {
        return $this->clubName;
    }
}
