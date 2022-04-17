<?php
if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = "home";
}

?>
<!doctype html>
<html lang="pt-br">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- CSS Boostrap 4-->
<link rel="stylesheet" href="src/bootstrap.min.css">
<link rel="stylesheet" href="src/codegroup.css">
<title>Clientes - CodeGroup</title>

</head>

<body>
    <header class="bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column" style="padding: 20px;">
            <h1 class="text-uppercase mb-0">CLIENTES - </>CodeGroup</h1>
            <p class="font-weight-light mb-0">Desenvolvido por: Henrique do Vale</p>
        </div>
    </header>

    <section class="page-section portfolio" id="portfolio">
        <div class="col-12">
            <div class="row">
                <div class="col-3 menu">
                        <h2 class="text-uppercase text-secondary mb-0">Menu</h2>
                        <a href="index.php?p=verClientes">
                            <button type="button" class="btn btn-outline-primary" style="width:100%;">Ver Clientes</button>
                        </a>
                        <div style="padding-top: 10px;"></div>
                        <a href="index.php?p=cadastrarCliente">
                            <button type="button" class="btn btn-outline-primary" style="width:100%;">Cadastrar Cliente</button>
                        </a>
                </div>
                <div class="col-9 corpo">

                    <?php 
                    // Inclui a mensagem de Erro ou Sucesso.
                    include_once("view/mensagemStatus.php");
                    // Inclui a pagina da View chamada pelo Menu
                    include_once("view/$p.php");
                    
                    ?>
                </div>
            </div>
        </div>

    </section>

    <script src="src/cep.js"></script>

    <!-- JavaScript Boostrap 4-->

    <script src="src/jquery-3.2.1.slim.min.js"></script>
    <script src="src/jquery.mask.min.js"></script>
    <script src="src/popper.min.js"></script>
    <script src="src/bootstrap.min.js"></script>
</body>