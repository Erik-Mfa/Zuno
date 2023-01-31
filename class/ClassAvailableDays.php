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

    public function getUnableDays($start, $end)
    {
        $b=$this->conectDB()->prepare("select * from available where = ? or where = ?");
        $b->execute();
        $b->bindParam(1, $start, \PDO::PARAM_INT);
        $b->bindParam(2, $end, \PDO::PARAM_INT);
        $f=$b->fetchAll(\PDO::FETCH_ASSOC);
        return json_encode($f);
    }
};