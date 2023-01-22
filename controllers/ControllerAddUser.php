<?php

include ("../config/conexao.php");

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

    // $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    // if (!empty($dados['SendLogin'])) {
        
    //     // var_dump($dados);
    //     $query_usuario = "SELECT id, nome, usuario, senha_usuario 
    //                     FROM usuarios 
    //                     WHERE usuario =:usuario  
    //                     LIMIT 1";
    //     $result_usuario = $conn->prepare($query_usuario);
    //     $result_usuario->bindParam(':usuario', $dados['usuario'], PDO::PARAM_STR);
    //     $result_usuario->execute();

    //     if(($result_usuario) AND ($result_usuario->rowCount() != 0)){
    //         $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
    //         // var_dump($row_usuario);
    //         if(password_verify($dados['senha_usuario'], $row_usuario['senha_usuario'])){
    //             $_SESSION['id'] = $row_usuario['id'];
    //             $_SESSION['nome'] = $row_usuario['nome'];
    //             echo "usuário logado";
    //         }else{
    //             $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Merda!</p>";
    //         }
    //     }else{
    //         $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Usuário ou senha inválida!</p>";
    //     }


    // }

    // if(isset($_SESSION['msg'])){
    //     echo $_SESSION['msg'];
    //     unset($_SESSION['msg']);
    // }