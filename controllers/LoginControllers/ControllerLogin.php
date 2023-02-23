<?php
include ("../../config/conexao.php");
session_start();

$btn=filter_input(INPUT_POST,'btn',FILTER_DEFAULT);

$objUser = new \Classes\ClassUsers();

if(!empty($btn)){
    $usuario=filter_input(INPUT_POST,'name',FILTER_DEFAULT);
    $password=filter_input(INPUT_POST,'password',FILTER_DEFAULT);

    $user = $objUser->getUserById($usuario, $password);
    
    if($user->rowCount() != 0){
        $f = $user->fetch(\PDO::FETCH_ASSOC);

        if($f['name'] == "admin" && $f['password'] == "zuno"){
            $_SESSION["role"] = "manager";
            header('Location: ' . DIRPAGE . 'views/manager');
        }else{
            $_SESSION["role"] = "user";
            header('Location: ' . DIRPAGE . 'views/user');
        }
    }else{
        header('Location: ' . DIRPAGE . 'index.php?error=wronguser');
    }
}