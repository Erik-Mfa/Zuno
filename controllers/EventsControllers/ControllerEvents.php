<?php

include ("../../config/conexao.php");

$objEvents=new \Classes\ClassEvents();
echo $objEvents->getEvents();