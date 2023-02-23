<?php include("../../config/conexao.php")?>
<?php include(DIRREQ."lib/html/header.php")?>
<?php include(DIRREQ."lib/html/nav.php")?>
<?php include(DIRREQ."lib/html/form.php")?>
<?php $date=new \DateTime($_GET['date'],new \DateTimeZone('America/Sao_Paulo')); ?>

<body class="main">
    <div class="row rounded-4">
        <div class="rounded-4 p-0" style="background-color:#d2fce4;">
            <!-- HEADER -->
            <div class="border rounded-4 mb-4 p-4 pb-3" style="background-color: #022604">
                <h4 class="text-light">LIBERAR SESSÃO</h4>
            </div>

            <!-- DROPDOWN -->
            <form class="mx-5" name="formEdit" id="formEdit" method="post" action="<?php echo DIRPAGE.'controllers/EventsControllers/ControllerEdit.php'; ?>">
            <input class="form-control form-control-sm"  type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>">
            <div>
                <label class="form-label m-0" for="title">NOME: </label>    
                <input class="form-control form-control-sm rounded-pill" type="text" name="title" id="title"><br>

                <label class="form-label m-0" for="title">EQUIPAMENTOS: </label>    
                <input class="form-control form-control-sm rounded-pill" type="text" name="description" id="description"><br>

                <label class="form-label m-0" for="title">INÍCIO: </label>    
                <input class="form-control form-control-sm rounded-pill" type="time" name="start" id="start" value="<?php echo $date->format("H:i"); ?>"><br>

                <label class="form-label m-0" for="end">FIM: </label>    
                <select class="form-select mb-5" aria-label="Disabled select example" name="end">
                    <option selected>Escolha um horário</option>
                    <option value="00:15">00:15</option>
                    <option value="00:30">00:30</option>
                </select>

                
            </div>

        </form>

        
        </div>
        <!-- LIBERAR HORÁRIOS -->
        <div class="d-grid gap-2 mt-2">
            <button type="button" class="btn btn-lg rounded-pill mt-3 w-75 m-auto" style="background-color: #3dc448;">SALVAR HORÁRIOS</button>
            <a href="<?php echo DIRPAGE.'views/manager/';?>" class="btn btn-lg rounded-pill w-75 m-auto" style="background-color: #3dc448;">VOLTAR</a>
        </div>
    </div>
</body>

<?php include(DIRREQ."lib/html/footer.php"); ?>