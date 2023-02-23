<?php include("config/conexao.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>
<?php include(DIRREQ."lib/html/form.php"); ?>
<?php include(DIRREQ."lib/errors.php"); ?>
<?php 
session_unset();
?>

<body class="login">
    
    <div class="container d-flex justify-content-center flex-column col-8" style="margin-bottom: 6rem;">
        <img  class="img-fluid" src="/img/logo_zuno.png" >
        
        <div class="text-bg-light border-rounded mt-4 mb-2 p-5 rounded-3">

            <form name="formLogin" id="formLogin" method="post" action="<?php echo DIRPAGE.'controllers/LoginControllers/ControllerLogin.php';?>">  
                <b><p class="row justify-content-center">FAÇA SEU LOGIN</p></b>

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

                <div class="row mb-5">
                    <div class="col">
                        <div class="text-center">
                            <input class="btn btn-success btn-lg rounded-pill w-100" type="submit" name="btn" value="Acessar">
                        </div>
                    </div>
                </div>
            </form>

            <div>
                <a class="row justify-content-center link-secondary mb-3" style="text-decoration: none;" href="">esqueci minha senha</a>

                <?php 
                    if(isset($_GET['error'])){
                        echo error_handler($_GET['error']);
                    }
                ?>
            </div>
        </div>
    </div>    

</body>

