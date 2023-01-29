<?php
namespace Classes;

use Models\ModelConect;

class ClassAvailableDays extends ModelConect
{
    public function getAvailableDays()
    {
        $b=$this->conectDB()->prepare("select * from available");
        $b->execute();
        $f=$b->fetchAll(\PDO::FETCH_ASSOC);
        return json_encode($f);
    }
};