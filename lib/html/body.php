<body class="bg">
    <!-- NAVBAR ----->
    <div>
        <nav style="margin-top: 40px; margin-left: 100px;">
            <!-- BOTÕES NAV ----->
            <div class="container-fluid d-flex justify-content-end text-success ">
            <a class="btn fs-5 pb-0 me-5" href="<?php echo DIRPAGE.'index.php'?>"><i class="bi-box-arrow-right" style="font-size: 1.7rem;"> SAIR </i></a>
            </div>

            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link fs-5 mx-1 p-4 py-2 active text-dark fw-bold" id="nav-calendario-tab" data-bs-toggle="tab" data-bs-target="#nav-calendario" type="button" role="tab" aria-controls="nav-calendario" aria-selected="true"
                style="word-spacing: 10px;">
                    <i class="bi-calendar-date"></i> HORÁRIOS
                </button>

                <?php 
                if($_SESSION["role"] == "manager"){
                echo '<button class="nav-link text-dark fs-5 mx-1 p-4 py-2 fw-bold" id="nav-pagamentos-tab" data-bs-toggle="tab" data-bs-target="#nav-pagamentos" type="button" role="tab" aria-controls="nav-pagamentos" aria-selected="false"
                style="word-spacing: 10px;">
                    <i class="bi-currency-dollar"></i> PAGAMENTOS
                </button>
                <button class="nav-link text-dark fs-5 mx-1 p-4 py-2 fw-bold" id="nav-relatorios-tab" data-bs-toggle="tab" data-bs-target="#nav-relatorios" type="button" role="tab" aria-controls="nav-relatorios" aria-selected="false"
                style="word-spacing: 10px;">
                    <i class="bi-newspaper"></i> RELATÓRIOS
                </button>';
                };?>

            </div>
        </nav>
        <div class="container-fluid tab-content bg-light content" id="nav-tabContent">
            

