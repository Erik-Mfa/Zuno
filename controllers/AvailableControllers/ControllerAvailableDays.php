<?php

include ("../../config/conexao.php");

$objEvents=new \Classes\ClassAvailable();
echo $objEvents->getAvailableDays();