<?php

include ("../config/conexao.php");

$objEvents=new \Classes\ClassEvents();

$id=filter_input(INPUT_GET,'id',FILTER_DEFAULT);
$objEvents->deleteEvent($id);