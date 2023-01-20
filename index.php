<?php include("config/conexao.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>

    <a href="<?php echo DIRPAGE.'views/user'; ?>">Calendário do Usuário</a><br><br>
    <a href="<?php echo DIRPAGE.'views/manager'; ?>">Calendário do Gerente</a>

    <form name="formLogin" id="formLogin" method="post" action="<?php echo DIRPAGE.'controllers/ControllerAddUser.php';?>">
        Nome: <input type="text" name="name" id="name"><br>
        Senha: <input type="senha" name="password" id="password"><br>
        <input type="submit" value="Confirmar Consulta">
    </form>

<?php include(DIRREQ."lib/html/footer.php"); ?>
