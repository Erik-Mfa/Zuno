<?php include("../../config/conexao.php")?>
<?php include(DIRREQ."lib/html/header.php")?>
<?php include(DIRREQ."lib/html/body.php")?>
<?php include(DIRREQ."lib/html/form.php")?>
<?php
$objEvents=new \Classes\ClassEvents();
$events = $objEvents->getEventsById($_GET['id']);
$date = new \DateTime($events['start']);
?>

<div class="rounded-4" style="background-color:#d2fce4;">   

    <div class="border rounded-4 p-4 pb-3 mb-2" style="background-color: #022604">
        <h4 class="text-light">EDITAR SESSÃO</h4>
    </div>
    
    <form class="mx-5" name="formEdit" id="formEdit" method="post" action="<?php echo DIRPAGE.'controllers/EventsControllers/ControllerEdit.php'; ?>">
        <input class="form-control form-control-sm"  type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>">
        <div>
            <label class="form-label m-0" for="title">NOME: </label>    
            <input class="form-control form-control-sm rounded-pill" type="text" name="title" id="title" value="<?php echo $events['title']; ?>"><br>
        </div>

        <div>
            <label class="form-label m-0" for="description">DESCRIÇÃO: </label>    
            <input class="form-control form-control-sm rounded-pill" type="text" name="description" id="description" value="<?php echo $events['description']; ?>"><br>
        </div>

        <div>
            <label class="form-label m-0" for="date">DATA: </label>    
            <input class="form-control form-control-sm rounded-pill" type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
        </div>

        <div>
            <label class="form-label m-0" for="time">COMEÇO: </label>    
            <input class="form-control form-control-sm rounded-pill" type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
        </div>

        <div>
            <label class="form-label m-0" for="time">FIM: </label>    
            <input class="form-control form-control-sm rounded-pill" type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
        </div>

        <div class="d-grid gap-2 mt-2">
            <input class="btn btn-success border rounded-pill" style="background-color: #3dc448;" type="submit" value="CONFIRMAR ALTERAÇÕES">
            <a class="btn btn-success border rounded-pill" style="background-color: #3dc448;" href="<?php echo DIRPAGE.'views/manager'?>">VOLTAR</a>
        </div>

    </form>

    <a id="delete" href="<?php echo DIRPAGE.'controllers/EventsControllers/ControllerDelete.php?id='.$_GET['id']; ?>"><img src="<?php echo DIRPAGE.'img/button-trash.png' ?>" class="my-4"></a>
</div>
      

<?php include(DIRREQ."lib/html/footer.php"); ?>