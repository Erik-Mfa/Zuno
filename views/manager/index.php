<?php include("../../config/conexao.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>
<?php include(DIRREQ."lib/html/body.php"); ?>
<?php 
if($_SESSION['role'] != "manager"){
    header('Location: ' . DIRPAGE . 'index.php');
}
?>
<!-- DIVS PARA CARREGAR O CONTEUDO ----->
<div class="tab-pane fade show active p-3 container" id="nav-calendario" role="tabpanel" aria-labelledby="nav-calendario-tab">
        <div class="calendarManager calendar bg-light" id="nav-calendario"></div>
</div>

<div class="tab-pane fade p-3 content" id="nav-pagamentos" role="tabpanel" aria-labelledby="nav-pagamentos-tab">
    <p>Em manutenção</p>
</div>

<div class="tab-pane fade p-3" id="nav-relatorios" role="tabpanel" aria-labelledby="nav-relatorios-tab">
    <p>Em manutenção</p>
</div>
 
<?php include(DIRREQ."lib/html/footer.php"); ?>
