<?php

include ("../../config/conexao.php");

$objUsers=new \Classes\ClassUsers();

$name=filter_input(INPUT_POST,'name',FILTER_DEFAULT);
$password=filter_input(INPUT_POST,'password',FILTER_DEFAULT);

if ($name) {
    
    $objUsers->createUser(
        0,
        $name,
        $password
    );

    header('Location: ' . DIRPAGE . 'index.php');
}
