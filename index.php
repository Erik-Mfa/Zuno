<?php include("config/conexao.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>

<div class="container text-center mt-4">

    <div class="container">
        <div class="container justify-items-center border col-4 mt-4">
            <form name="formLogin" id="formLogin" method="post" action="<?php echo DIRPAGE.'controllers/ControllerLogin.php';?>">
                <div class="form-group mt-2">
                    <label class="form-label" for="name">Nome:</label>
                    <input class="form-control" type="text" name="name" id="name"><br>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Senha: </label>
                    <input class="form-control" type="text" name="password" id="password"><br>
                </div>
                <div class="form-group mt-4 mb-3 text-center">
                    <input class="form-control" type="submit" name="btn" value="Acessar">
                </div>
            </form>

            <!-- <div class="form-group mt-4 mb-3 text-center">
                <input class="form-control" type="submit" value="Cadastrar usuário">
            </div> -->
        </div>
    </div>
</div>


<?php include(DIRREQ."lib/html/footer.php"); ?>
