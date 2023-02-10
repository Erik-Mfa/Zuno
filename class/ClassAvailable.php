<?php
namespace Classes;

use Models\ModelConect;

class ClassAvailable extends ModelConect
{
    public function getAvailableDays()
    {
        $b=$this->conectDB()->prepare("select * from available");
        $b->execute();
        $f=$b->fetchAll(\PDO::FETCH_ASSOC);
        return json_encode($f);
    }

    public function getAvailableTime()
    {
        $b=$this->conectDB()->prepare("select * from available_time");
        $b->execute();
        $f=$b->fetchAll(\PDO::FETCH_ASSOC);
        return json_encode($f);
    }

};