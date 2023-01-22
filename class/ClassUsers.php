<?php
namespace Classes;

use Models\ModelConect;

class ClassUsers extends ModelConect
{
    #Trazer os dados de eventos do banco
    public function getUsers()
    {
        $b=$this->conectDB()->prepare("select * from usuarios");
        $b->execute();
        $f=$b->fetchAll(\PDO::FETCH_ASSOC);
        return json_encode($f);
    }

    #Criar usuario
    public function createUser($id=0,$name,$password)
    {   
        $b=$this->conectDB()->prepare("insert into usuarios values (?,?,?)");
        $b->bindParam(1, $id, \PDO::PARAM_INT);
        $b->bindParam(2, $name, \PDO::PARAM_STR);
        $b->bindParam(3, $password, \PDO::PARAM_STR);
        $b->execute();
    }

    #Buscar usuario pelo nome e senha
    public function getUserById($usuario, $password)
    {
        $b=$this->conectDB()->prepare("select * from usuarios where name=? and password=?");
        $b->bindParam(1, $usuario, \PDO::PARAM_STR);
        $b->bindParam(2, $password, \PDO::PARAM_STR);
        $b->execute();
        return $b;
    }
}