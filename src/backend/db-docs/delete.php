<?php
// iniciando sessao do php
session_start();

// incluindo a conexao ao bd
include('../db-docs/conection.php');

//aplicando filtro
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

// query do SQL
$delete = $conn->query("DELETE FROM tb_user_email WHERE id_user = '$id'");
$affected_rows = mysqli_affected_rows($conn);

// Se algum registro do banco de dados for afetado, redireciona
if (mysqli_affected_rows($conn) > 0) {
    header("Location:../php/listData.php");
}
