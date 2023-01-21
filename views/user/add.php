<?php include("../../config/conexao.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>
<?php $date=new \DateTime($_GET['date'],new \DateTimeZone('America/Sao_Paulo')); ?>

<div class="container">
    <div class="container">
        <div class="container justify-items-center border col-4 mt-4">
            <h2 class="col text-center mb-4">Reserva da sala de reunião</h2>
            <form name="formAdd" id="formAdd" method="post" action="<?php echo DIRPAGE.'controllers/ControllerAdd.php'; ?>">
                <div>
                    <label class="form-label" for="name">Data: </label>
                    <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
                </div>
                <div>
                    <label class="form-label" for="title">Hora: </label>
                    <input type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
                </div>
                <div>
                    <label class="form-label" for="title">Paciente: </label>
                    <input type="text" name="title" id="title"><br>
                </div>
                <div>
                    <label class="form-label" for="description">Queixa: </label>
                    <input type="text" name="description" id="description"><br>
                </div>
                <div>
                    Quanto tempo deseja de atendimento:
                    <select name="horasAtendimento" id="horasAtendimento">
                        <option value="">Selecione</option>
                        <option value="1">1h</option>
                        <option value="2">2h</option>
                        <option value="3">3h</option>
                    </select><br>
                </div>
                <div class="form-group mt-4 mb-3 text-center">
                    <input class="form-control"  type="submit" value="Marcar Consulta">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include(DIRREQ."lib/html/footer.php"); ?>