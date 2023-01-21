<?php

include ("../config/conexao.php");

$usuario=filter_input(INPUT_POST,'name',FILTER_DEFAULT);
$password=filter_input(INPUT_POST,'password',FILTER_DEFAULT);

$objUser=new \Classes\ClassUsers();
print_r($objUser->getUser($usuario, $password));
