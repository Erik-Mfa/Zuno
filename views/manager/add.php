<?php include("../../config/conexao.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>
<?php include(DIRREQ."lib/html/body.php"); ?>

<div class="tab-pane fade show active p-3 container border border-top-0 border-bottom-0" id="nav-calendario" role="tabpanel" aria-labelledby="nav-calendario-tab">

    <div class="container d-flex justify-content-center text-center mt-5 col-6">
        <div class="row rounded-3" style="background-color:darkseagreen;" >

            <div class="bg-secondary border rounded-3">
                <h1 style="color: white;">ADICIONAR E EDITAR HORÁRIOS</h1>
            </div>

            <!-- BOTÃO VOLTAR CALENDÁRIO -->
            <a href="<?php 
            if($_SESSION["role"] == "manager"){
                echo DIRPAGE.'views/manager/';
            }?>" 
            class="btn btn-success btn-md border rounded w-50 mx-auto" style="background-color: forestgreen;" >
            Visão Calendário</a>

            <!-- DROPDOWN -->
            <div class="dropdown">

                <button type="button" class="btn btn-success btn-lg dropdown-toggle border rounded rounded-pill w-75 mt-5" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                    MANHÃ
                </button>

                <div class="dropdown-menu dropdown-menu-end text-center p-4">
                    <h3>Liberar Horários</h3>
                    <hr><br>
                    <form class="">
                        <div class="mb-3">  
                            <input class="form-control" type="time" name="time" id="time" value=""><br>
                        </div>

                        <button type="submit" class="btn btn-success border rounded-pill">Atualizar Horários</button>
                    </form>
                </div>

            </div>

            <!-- LIBERAR HORÁRIOS -->
            <button type="button" class="btn btn-success btn-lg border rounded-pill mt-3" style="background-color:lightgreen;">Liberar Horários</button>
        </div>
    </div>

</div>

<?php include(DIRREQ."lib/html/footer.php"); ?>