<?php include("../../config/conexao.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>
<?php include(DIRREQ."lib/html/body.php"); ?>

<div class="container p-5 w-50">

    <div class="border border-top-0 border-bottom-0">
        <div class="container d-flex justify-content-center text-center col-6">
            <div class="row rounded-4">

                <div class="rounded-4 p-0" style="background-color:#d2fce4;">
                    <!-- HEADER -->
                    <div class="border rounded-4 mb-4 p-4 pb-3" style="background-color: #022604">
                        <h4 class="text-light">ADICIONAR E EDITAR HORÁRIOS</h4>

                        <!-- BOTÃO VOLTAR CALENDÁRIO -->
                        <a href="<?php 
                        if($_SESSION["role"] == "manager"){
                            echo DIRPAGE.'views/manager/';
                        }?>" 
                        class="btn btn-success btn-md rounded-4 mx-auto w-50 mt-2">
                        VISÃO CALENDÁRIO</a>
                    </div>

                    <!-- DROPDOWN -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-success btn-lg dropdown-toggle rounded rounded-pill w-75 mb-3 text-wrap" style="word-spacing: 72px;" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" name="manha">
                            <i class="bi-brightness-high"></i> MANHÃ
                        </button>
                        <div class="dropdown-menu dropdown-menu-end text-center p-4">

                            <form class="" style="width: 16.56rem;">
                                <h3>Liberar Horários</h3>
                                <hr><br>

                                <div class="mb-3">  
                                    <input class="form-control" name="time" id="time" value=""><br>
                                </div>

                                <button type="submit" class="btn btn-success rounded-pill">ATUALIZAR HORÁRIOS</button>
                            </form>



                        </div>
                    </div>

                    
                    <div class="dropdown">
                        <button type="button" class="btn btn-success btn-lg dropdown-toggle rounded rounded-pill w-75 mb-3" style="word-spacing: 80px;" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <i class="bi-cloud-sun"></i> TARDE
                        </button>

                        <div class="dropdown-menu dropdown-menu-end text-center p-4">
                            <h3>Liberar Horários</h3>
                            <hr><br>
                            <form class="">
                                <div class="mb-3">  
                                    <input class="form-control" type="time" name="time" id="time" value=""><br>
                                </div>

                                <button type="submit" class="btn btn-success rounded-pill">ATUALIZAR HORÁRIOS</button>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown">
                        <button type="button" class="btn btn-success btn-lg dropdown-toggle rounded rounded-pill w-75 mb-5" style="word-spacing: 80px;" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        <i class="bi-moon"></i> NOITE
                        </button>

                        <div class="dropdown-menu dropdown-menu-end text-center p-4">
                            <h3>Liberar Horários</h3>
                            <hr><br>
                            <form class="">
                                <div class="mb-3">  
                                    <input class="form-control" type="time" name="time" id="time" value=""><br>
                                </div>

                                <button type="submit" class="btn btn-success rounded-pill">ATUALIZAR HORÁRIOS</button>
                            </form>
                        </div>
                    </div>
                
                </div>
                <!-- LIBERAR HORÁRIOS -->
                <button type="button" class="btn btn-success btn-lg border rounded-pill mt-3 w-75 m-auto" style="background-color: #3dc448;">SALVAR HORÁRIOS</button>
            </div>
        </div>

    </div>
</div>

<?php include(DIRREQ."lib/html/footer.php"); ?>