<?php
// iniciando sessao do php
session_start();

// include header HTML
include('../../includes/header.inc.php') ?>

<!-- importando CSS e fonte -->
<link href="../../frontend/css/style.min.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <!-- include navBar comum em 'edit.php' e 'listData.php' -->
    <?php include('../../includes/navBar.inc.php') ?>
    </nav>

    <!-- Capturando dados selecionados na lista de dados para editar -->
    <?php
    include '../db-docs/conection.php';

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $_SESSION['id'] = $id;

    $querySelect = $conn->query("SELECT * FROM tb_user_email WHERE id_user = '$id'");
    while ($records = $querySelect->fetch_assoc()) {
        $name = $records['user_name'];
        $email = $records['user_email'];
    }
    ?>

    <!-- Titulo da lista de dados -->
    <div class=" card-text mt-3 pt-1 pb-1">
        <p class=" h5 text-center">Editar usuário cadastrado</p>
    </div>
    <div class=" card-text mt-3 pt-1 pb-1">
        <p class="text-center">Altere os dados necessários e clique em atualizar para salva-los</p>
    </div>

    <!-- Formulario para edição -->
    <div class="container">
        <form class="border border-gray p-4 shadow-sm" style="border-radius: 5px;" action="../db-docs/update.php" method="POST">
            <!-- Mensagem -->
            <?php
            if (isset($_SESSION['msgUP'])) {
                echo $_SESSION['msgUP'];
                session_unset();
            }
            ?>
            <div class="form-group align-items-center">
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required autofocus>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary shadow-sm" style="border-radius: 10px;">Atualizar</button>
            <a href="listData.php" class="btn btn-primary shadow-sm" style="border-radius: 10px;">Cancelar</a>
        </form>
    </div>

    <!-- footer -->
    <?php include('../../includes/footer.inc.php') ?>