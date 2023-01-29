<?php

include ("../config/conexao.php");

$objEvents=new \Classes\ClassAvailableDays();
echo $objEvents->getAvailableDays();