<?php
include ("../../config/conexao.php");

$btn = filter_input(INPUT_POST,'btn',FILTER_DEFAULT);

if(!empty($btn)){
    $title = filter_input(INPUT_POST,'title',FILTER_DEFAULT);
    $description = filter_input(INPUT_POST,'description',FILTER_DEFAULT);
    $date = filter_input(INPUT_POST,'date',FILTER_DEFAULT);
    $time = filter_input(INPUT_POST,'time',FILTER_DEFAULT);
    $horasAtendimento = 3;
    $start = new \DateTime($date.' '.$time, new \DateTimeZone('America/Sao_Paulo'));

    $objEvents = new \Classes\ClassEvents();    
    $objAvailable = new \Classes\ClassAvailableDays();
    
    //Formatando data
    $startEvent = $start->format("Y-m-d H:i:s");
    $endEvent = $start->modify('+'.$horasAtendimento.'hours')->format("Y-m-d H:i:s");

    $unableDays = $objAvailable->getUnableDays($start->format("Y-m-d"), $end->format("Y-m-d"));
    




    //Se já existe um evento naquele horário, não permitir
    $useEvent = $objEvents->getDuplicateEvents($startEvent, $endEvent);
    if($teste >= 1){
        echo "Já existe um evento";
    }else{
    //Se não existe cria evento
    $objEvents->createEvent(
        0,
        $title,
        $description,
        $start->format("Y-m-d H:i:s"),
        $start->modify('+'.$horasAtendimento.'hours')->format("Y-m-d H:i:s")
    );
    header('Location: ' . DIRPAGE . 'views/user');
    };

}