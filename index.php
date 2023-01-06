<?php include("config/conexao.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>

    <a href="<?php echo DIRPAGE.'views/user'; ?>">Calendário do Usuário</a><br><br>
    <a href="<?php echo DIRPAGE.'views/manager'; ?>">Calendário do Gerente</a>

<?php include(DIRREQ."lib/html/footer.php"); ?>

<?php
    // echo password_hash(123456, PASSWORD_DEFAULT);
   
   
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
    ?>