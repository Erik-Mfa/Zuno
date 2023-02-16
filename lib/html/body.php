<body>

    <!-- NAVBAR vvvvvv----->
        <nav style="margin-top: 10px; margin-left: 100px;">

            <!-- BOTÃO SAIR vvvvv----->
            <div class="container-fluid d-flex justify-content-end text-success">
                <a class="btn fs-5 pb-0 me-5" href="<?php echo DIRPAGE.'index.php'?>"><i class="bi-box-arrow-right" style="font-size: 1.7rem;"> SAIR </i></a>
            </div>

             <!-- TABS vvvvv----->
            <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                <button class="nav-link fs-5 mx-1 p-4 py-2 active text-dark fw-bold" id="nav-calendario-tab" data-bs-toggle="tab" data-bs-target="#nav-calendario" type="button" role="tab" aria-controls="nav-calendario" aria-selected="true"
                style="word-spacing: 10px;"><i class="bi-calendar-date"></i> HORÁRIOS </button>

                <!-- TABS MANAGER vvvvv----->
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
                }?>
                
            </div>
        </nav>

        <!-- CONTEÚDO PRINCIPAL SERÁ CARREGADO AQUI vvvvv----->
        <div class="container-fluid tab-content bg-light rounded-4" id="nav-tabContent">
            

