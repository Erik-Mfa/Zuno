<?php
include ("../../config/conexao.php");

$btn = filter_input(INPUT_POST,'btn',FILTER_DEFAULT);

if(!empty($btn)){
    $title = filter_input(INPUT_POST,'title',FILTER_DEFAULT);
    $description = filter_input(INPUT_POST,'description',FILTER_DEFAULT);
    $date = filter_input(INPUT_POST,'date',FILTER_DEFAULT);
    $time = filter_input(INPUT_POST,'time',FILTER_DEFAULT);
    $start = new \DateTime($date.' '.$time, new \DateTimeZone('America/Sao_Paulo'));

    $objEvents = new \Classes\ClassEvents();    
    
    //Formatando data
    $startEvent = $start->format("Y-m-d H:i:s");
    $endEvent = $start->modify('+3 hours')->format("Y-m-d H:i:s");

    //Se já existe um evento naquele horário, não permitir
    $useEvent = $objEvents->getDuplicateEvents($startEvent, $endEvent);

    if($useEvent >= 1){
        echo "Já existe um evento";
    }else{
    //Se não existe cria evento
    $objEvents->createEvent(
        0,
        $title,
        $description,
        $startEvent,
        $endEvent
    );
    header('Location: ' . DIRPAGE . 'views/user');
    };

}