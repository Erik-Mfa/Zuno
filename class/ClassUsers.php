<?php
namespace Classes;

use Models\ModelConect;

class ClassUsers extends ModelConect
{
    public function createUser($id=0,$name,$password)
    {   
        $b=$this->conectDB()->prepare("insert into usuarios values (?,?,?)");
        $b->bindParam(1, $id, \PDO::PARAM_INT);
        $b->bindParam(2, $name, \PDO::PARAM_STR);
        $b->bindParam(3, $password, \PDO::PARAM_STR);
        $b->execute();
    }

    #Buscar eventos pelo id
    public function getUser($usuario, $password)
    {
        $b=$this->conectDB()->prepare("select * from usuarios where name=? and password=?");
        $b->bindParam(1, $usuario, \PDO::PARAM_INT);
        $b->bindParam(2, $password, \PDO::PARAM_INT);
        $b->execute();
        return $f=$b->fetch(\PDO::FETCH_ASSOC);
    }
}