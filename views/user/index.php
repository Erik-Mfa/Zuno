<?php include("../../config/conexao.php")?>
<?php include(DIRREQ."lib/html/header.php")?>
<?php include(DIRREQ."lib/html/body.php")?>
<?php 
if($_SESSION['role'] != "user"){
    header('Location: ' . DIRPAGE . 'index.php');
}
?>

<!-- CONTEUDO CARREGADO PELAS TABS ----->
<div class="tab-pane fade show active p-3 container" id="nav-calendario" role="tabpanel" aria-labelledby="nav-calendario-tab">
    <div class="calendarUser calendar bg-light"></div>
</div>

<div class="tab-pane fade p-3" id="nav-pagamentos" role="tabpanel" aria-labelledby="nav-pagamentos-tab">
    <p>CU</p>
</div>

<div class="tab-pane fade p-3" id="nav-relatorios" role="tabpanel" aria-labelledby="nav-relatorios-tab">
    <p>CU</p>
</div>

<?php include(DIRREQ."lib/html/footer.php"); ?>

