<?php include("../../config/conexao.php"); ?>
    <?php include(DIRREQ."lib/html/header.php"); ?>
    <?php
$objEvents=new \Classes\ClassEvents();
$events=$objEvents->getEventsById($_GET['id']);
$date=new \DateTime($events['start']);
?>
<div class="container">
    <div class="container justify-items-center border col-4 mt-4">
        <a id="delete" href="<?php echo DIRPAGE.'controllers/EventsControllers/ControllerDelete.php?id='.$_GET['id']; ?>"><img src="<?php echo DIRPAGE.'img/button-trash.png' ?>" alt=""></a>
        <form name="formEdit" id="formEdit" method="post" action="<?php echo DIRPAGE.'controllers/EventsController/EventsControllers/ControllerEdit.php'; ?>">
            <input class="form-control"  type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>"><br>

            <div>
                <label class="form-label" for="title">Nome: </label>    
                <input class="form-control" type="text" name="title" id="title" value="<?php echo $events['title']; ?>"><br>
            </div>

            <div>
                <label class="form-label" for="description">Descrição: </label>    
                <input class="form-control" type="text" name="description" id="description" value="<?php echo $events['description']; ?>"><br>
            </div>

            <div>
                <label class="form-label" for="date">Data: </label>    
                <input class="form-control" type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
            </div>

            <div>
                <label class="form-label" for="time">Hora: </label>    
                <input class="form-control" type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
            </div>

            <div>
                <input class="form-control mb-4" type="submit" value="Confirmar Alterações">
            </div>
        </form>
    </div>
</div>

<?php include(DIRREQ."lib/html/footer.php"); ?>