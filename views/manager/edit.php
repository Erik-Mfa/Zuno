<?php include("../../config/conexao.php");?>
<?php include(DIRREQ."lib/html/header.php");?>
<?php include(DIRREQ."lib/html/body.php");?>
<?php
$objEvents=new \Classes\ClassEvents();
$events = $objEvents->getEventsById($_GET['id']);
$date = new \DateTime($events['start']);
?>

<div class="container p-2 w-50">
    <div class="d-flex justify-content-center text-center col-auto border border-top-0 border-bottom-0 w-100">
        <div class="row rounded-4 col-6">
            
            <div class="rounded-4 p-0" style="background-color:#d2fce4;">   

                <div class="border rounded-4 p-4 pb-3" style="background-color: #022604">
                    <h4 class="text-light">LIBERAR HORÁRIOS</h4>
                </div>
                <form class="mx-5" name="formEdit" id="formEdit" method="post" action="<?php echo DIRPAGE.'controllers/EventsControllers/ControllerEdit.php'; ?>">
                    <input class="form-control"  type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>"><br>

                    <div>
                        <label class="form-label" for="title">NOME: </label>    
                        <input class="form-control rounded-pill" type="text" name="title" id="title" value="<?php echo $events['title']; ?>"><br>
                    </div>

                    <div>
                        <label class="form-label" for="description">DESCRIÇÃO: </label>    
                        <input class="form-control rounded-pill" type="text" name="description" id="description" value="<?php echo $events['description']; ?>"><br>
                    </div>

                    <div>
                        <label class="form-label" for="date">DATA: </label>    
                        <input class="form-control rounded-pill" type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
                    </div>

                    <div>
                        <label class="form-label" for="time">HORA: </label>    
                        <input class="form-control rounded-pill" type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
                    </div>

                    <div class="d-grid gap-2 mt-4">
                        <input class="btn btn-success btn-lg border rounded-pill" style="background-color: #3dc448;" type="submit" value="CONFIRMAR ALTERAÇÕES">
                        <a class="btn btn-success btn-lg border rounded-pill mt-3" style="background-color: #3dc448;" href="<?php echo DIRPAGE.'views/manager'?>">VOLTAR</a>
                    </div>

                </form>

                <a id="delete" href="<?php echo DIRPAGE.'controllers/EventsControllers/ControllerDelete.php?id='.$_GET['id']; ?>"><img src="<?php echo DIRPAGE.'img/button-trash.png' ?>" class="my-4"></a>

            </div>
        </div>
    </div>
</div>

<?php include(DIRREQ."lib/html/footer.php"); ?>