<?php

include ("../config/conexao.php");

$btn=filter_input(INPUT_POST,'btn',FILTER_DEFAULT);

$objUser=new \Classes\ClassUsers();

if(!empty($btn)){
    $usuario=filter_input(INPUT_POST,'name',FILTER_DEFAULT);
    $password=filter_input(INPUT_POST,'password',FILTER_DEFAULT);

    $user = $objUser->getUserById($usuario, $password);
    
    if($user->rowCount() != 0){
        $f = $user->fetch(\PDO::FETCH_ASSOC);

        if($f['name'] == "admin" && $f['password'] == "zuno"){
            header('Location: ' . DIRPAGE . 'views/manager');
        }else{
            header('Location: ' . DIRPAGE . 'views/user');
        }
    }else{
        echo "Usuário não existe";
    }
}