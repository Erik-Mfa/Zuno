<?php include("../../config/conexao.php")?>
<?php include(DIRREQ."lib/html/header.php")?>
<?php include(DIRREQ."lib/html/nav.php")?>
<?php include(DIRREQ."lib/html/form.php")?>
<?php $date=new \DateTime($_GET['date'],new \DateTimeZone('America/Sao_Paulo')); ?>


        <div class="row rounded-4 col-6">

            <h2 class="col text-center mb-4 mt-3">AGENDAR SESSÃO</h2>
            <form name="formAdd" id="formAdd" method="post" action="<?php echo DIRPAGE.'controllers/EventsControllers/ControllerAdd.php'; ?>">
                <div>
                    <label class="form-label" for="title">Nome: </label>
                    <input class="form-control" type="text" name="title" id="title"><br>
                </div>

                <div>
                    <label class="form-label" for="date">Data: </label>
                    <input class="form-control" type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
                </div>

                <div>
                    <label class="form-label" for="time">Hora: </label>
                    <input class="form-control"  type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
                </div>

                <div class="d-grid gap-2 mb-4">
                    <input name="btn" id="btn" class="btn btn-success btn-lg border rounded-pill" style="background-color: #3dc448;" type="submit" value="Agendar">
                    <a class="btn btn-success btn-lg border rounded-pill mt-3" style="background-color: #3dc448;" href="<?php echo DIRPAGE.'views/user'?>">VOLTAR</a>
                </div>

            </form>
        </div>
  
<?php include(DIRREQ."lib/html/footer.php"); ?>