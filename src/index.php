<!-- Iniciando as sessoes do php -->
<?php session_start() ?>

<!-- Include header.php - cabeçalho do html e imports do bootstrap.min.css -->
<?php include_once('includes/header.inc.php') ?>
<link href="frontend/css/style.min.css" type="text/css" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">

</head>

<!-- Arrisquei usar o Bootstrap e o php, não tenho certeza se usei certo, até porque eu nunca tinha mexido com eles até então...
        Já que é um desafio, porque não, EU ME DESAFIAR? rsrs :D
        -->

<body>
    <!-- Container -->
    <div class="d-flex justify-content-center">
        <div id="cont" class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">

                    <!-- Logo -->
                    <img src="frontend/img/Shopmee brand.png" alt="Imagem logo shopmee" class="img-responsive" style="margin:0 auto;">
                </div>
            </div>

            <!-- Subtitulo -->
            <div class="row mt-2">
                <div class="col-12 text-center ">
                    <p id="text" class=""></p>Inscreva-se na nossa newsletter e receba <strong>conteúdo sobre
                        <br>negócios e dicas para aumentar suas vendas</strong></p>
                </div>
            </div>

            <!-- Formulario -->
            <div class="row justify-content-center">
                <div class="col-md-6 ">
                    <form id="formUser" name="form1" class="form-horizontal mt-2" action="backend/db-docs/create.php" method="POST">

                        <div class="form-group">
                            <input id="inputEmail" name="email" type="email" class="form-control border-0 p-3" onblur="validateEmail(form1.email)" placeholder="Comece informando seu melhor e-mail" required>
                            <small id="msg" class="form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                            <input id="inputName" name="name" type="text" class="form-control border-0 p-3" placeholder="Agora seu nome" required>
                        </div>
                        <button id="btnValide" name="btnSubmit" type="submit" class="btn btn-primary btn-block" style="color: #ffffff;"><b>ME
                                INSCREVER</b></button>
                        <!-- session php -->
                        <?php
                        if (isset($_SESSION['msg'])) {
                            echo $_SESSION['msg'];
                            session_unset();
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="fixed-bottom">
        <button class="btn btn-secondary mb-3 ml-2" onclick="window.location.href='../src/backend/php/listData.php'">Lista de dados</button>
    </footer>

    <!-- scripts -->
    <script src="/frontend/js/validateEmail.js" type="text/javascript"></script>
    <?php include_once('includes/footer.inc.php') ?>