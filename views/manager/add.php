<?php include("../../config/conexao.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>
<?php include(DIRREQ."lib/html/body.php"); ?>

<div class="container p-5 w-50">
        <div class="container d-flex justify-content-center text-center col-7 border border-top-0 border-bottom-0 p-5">
            <div class="row rounded-4">
                <div class="rounded-4 p-0" style="background-color:#d2fce4;">
                    <!-- HEADER -->
                    <div class="border rounded-4 mb-4 p-4 pb-3" style="background-color: #022604">
                        <h4 class="text-light">LIBERAR HORÁRIOS</h4>
                
                        <a href="<?php echo DIRPAGE.'views/manager/';?>" class="btn btn-success btn-md rounded-4 mx-auto w-50 mt-2">VISÃO CALENDÁRIO</a>
                    </div>

                    <!-- DROPDOWN -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-success btn-lg dropdown-toggle rounded rounded-pill w-75 mb-3 text-wrap" style="word-spacing: 52px;" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" name="manha">
                            <i class="bi-brightness-high"></i> MANHÃ
                        </button>
                        <div class="dropdown-menu dropdown-menu-end text-center p-4">
                            <form class="" style="width: 16.56rem;">
                                <h3>LIBERAR HORÁRIOS</h3>
                                <hr><br>

                                <div class="mb-3">  
                                    <input class="form-control" name="time" id="time" value=""><br>
                                </div>

                                <button type="submit" class="btn btn-success rounded-pill">ATUALIZAR HORÁRIOS</button>
                            </form>


                        </div>
                    </div>

                    
                    <div class="dropdown">
                        <button type="button" class="btn btn-success btn-lg dropdown-toggle rounded rounded-pill w-75 mb-3" style="word-spacing: 60px;" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <i class="bi-cloud-sun"></i> TARDE
                        </button>

                        <div class="dropdown-menu dropdown-menu-end text-center p-4">
                            <h3>LIBERAR HORÁRIOS</h3>
                            <hr><br>
                            <form class="" style="width: 16.56rem;" action="">
                                <div class="mb-3">  
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="">
                                    <input class="form-control text-center rounded-pill" type="text" name="text" id="text" value="" disabled><br>
                                </div>

                                <button type="submit" class="btn btn-success rounded-pill">ATUALIZAR HORÁRIOS</button>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown">
                        <button type="button" class="btn btn-success btn-lg dropdown-toggle rounded rounded-pill w-75 mb-5" style="word-spacing: 60px;" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        <i class="bi-moon"></i> NOITE
                        </button>

                        <div class="dropdown-menu dropdown-menu-end text-center p-4">
                            <h3>LIBERAR HORÁRIOS</h3>
                            <hr><br>
                            <form class="" style="width: 16.56rem;">
                                <div class="mb-3">  
                                    <input class="form-control" type="time" name="time" id="time" value=""><br>
                                </div>

                                <button type="submit" class="btn btn-success rounded-pill">ATUALIZAR HORÁRIOS</button>
                            </form>
                        </div>
                    </div>
                
                </div>
                <!-- LIBERAR HORÁRIOS -->
                <button type="button" class="btn btn-success btn-lg border rounded-pill mt-3 w-75 m-auto" style="background-color: #3dc448">SALVAR HORÁRIOS</button>
            </div>
        </div>

    
</div>

<?php include(DIRREQ."lib/html/footer.php"); ?>