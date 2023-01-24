<?php
include ("../config/conexao.php");

$btn=filter_input(INPUT_POST,'btn',FILTER_DEFAULT);

if(!empty($btn)){
    $objEvents=new \Classes\ClassEvents();

    $title = filter_input(INPUT_POST,'title',FILTER_DEFAULT);
    $description = filter_input(INPUT_POST,'description',FILTER_DEFAULT);
    $date = filter_input(INPUT_POST,'date',FILTER_DEFAULT);
    $time = filter_input(INPUT_POST,'time',FILTER_DEFAULT);
    $horasAtendimento = filter_input(INPUT_POST,'horasAtendimento',FILTER_DEFAULT);
    $start = new \DateTime($date.' '.$time, new \DateTimeZone('America/Sao_Paulo'));

    $startDate = $start->format("Y-m-d H:i:s");
    $endDate = $start->modify('+'.$horasAtendimento.'hours')->format("Y-m-d H:i:s");

    $teste = $objEvents->getDuplicateEvents($startDate, $endDate);

    if($teste >= 1){
        echo "Já existe um evento";
    }else{
    $objEvents->createEvent(
        0,
        $title,
        $description,
        'blue',
        $start->format("Y-m-d H:i:s"),
        $start->modify('+'.$horasAtendimento.'hours')->format("Y-m-d H:i:s")
    );

    header('Location: ' . DIRPAGE . 'views/user');
};

    
}