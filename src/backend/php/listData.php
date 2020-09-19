<!-- Include head - cabeçalho do html e imports do bootstrap.min.css -->
<?php include('../../includes/header.inc.php') ?>

<!-- importe de CSS e fonte -->
<link href="../../frontend/css/style.min.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <!-- include navBar comum em 'edit.php' e 'listData.php' -->
    <?php include('../../includes/navBar.inc.php');
    ?>

    <div class="collapse navbar-collapse justify-content-end">
        <form class="form-inline">
            <button class="btn btn-success form-control my-2 my-sm-0" onclick="window.location.reload()" type="submit">Atualizar dados</button>
        </form>
    </div>
    </nav>

    <!-- Titulo da lista de dados -->
    <div class=" card-text mt-3 pt-1 pb-1">
        <p class=" h5 text-center">Lista de usuários cadastrados</p>
    </div>

    <!-- Tabela com a lista dos dados -->
    <div class="container mt-2">
        <div class="table-responsive-md">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <!-- Nomes das colunas da tabela -->
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Data do Cadastro/Alteração</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Include read.php - mostra os dados lidos do banco de dados -->
                    <?php include_once('../db-docs/read.php') ?>
                </tbody>
            </table>

        </div>
    </div>
    <footer class="fixed-bottom">
        <button class="btn btn-secondary mb-3 ml-2" onclick="window.location.href='../../index.php'">Landing page</button>
    </footer>
    <!-- Include footet - scripts -->
    <?php include_once('../../includes/footer.inc.php') ?>