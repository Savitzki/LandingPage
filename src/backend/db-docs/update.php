<?php
// iniciando sessao do php
session_start();

// incluindo a conexao ao bd
include("conection.php");

// capturando valor do id passado pela sessao
$id = $_SESSION['id'];

//filtrando os dados do formulario
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

// query SQL
$update = $conn->query("UPDATE tb_user_email SET user_name = '$name', user_email = '$email', data_add = now()  WHERE id_user='$id' ");

// Se algum registro do banco de dados for afetado, redireciona
if ($affected_rows = mysqli_affected_rows($conn) > 0) {
    header("Location:../php/listData.php");
}
