<?php include("config/conexao.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>

<div class="container h-100 d-flex justify-content-center text-bg-success">
    <div class="container text-bg-light border-rounded mt-4 mb-4 p-5 rounded-3" style="width: 42%;">

        <form name="formLogin" id="formLogin" method="post" action="<?php echo DIRPAGE.'controllers/LoginControllers/ControllerLogin.php';?>">
            
        <b><p class="row justify-content-center" style="font-family: 'Lato', sans-serif;">FAÇA SEU LOGIN</p></b>

        <div class="row mb-4">
            <div class="col input-group border-bottom p-0">
                <span class="input-group-text border border-0 bi-person-fill text-bg-light p-3"></span>
                <div class="form-floating">
                    <input class="border border-0 form-control" type="text" name="name" id="name" placeholder="Nome: ">
                    <label for="name">Nome: </label> 
                </div>
            </div>
        </div>
            
        <div class="row mb-4">
            <div class="col input-group border-bottom p-0">
                <span class="input-group-text border border-0 bi-lock-fill text-bg-light p-3"></span>
                <div class="form-floating">
                    <input class="border border-0 form-control" type="password" name="password" id="password" placeholder="Senha: ">
                    <label for="password">Senha: </label>
                </div>
            </div>
        </div>    

        <div class="row mb-4">
            <div class="col">
                <div class="text-center">
                    <input class="btn btn-success btn-lg rounded-pill w-100" type="submit" name="btn" value="Acessar">
                </div>
            </div>
        </div>

        <a class="row justify-content-center link-secondary" style="text-decoration: none;" href="">esqueci minha senha</a>
        </form>

    </div>
</div>    

            <!-- <div class="form-group mt-4 mb-3 text-center">
                <input class="form-control" type="submit" value="Cadastrar usuário">
            </div> -->
        
<?php include(DIRREQ."lib/html/footer.php"); ?>
