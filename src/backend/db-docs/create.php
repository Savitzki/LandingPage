<?php
// iniciando sessao do php
session_start();

// incluindo a conexao ao bd
include("conection.php");

//filtrando os dados do formulario
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$name  = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

// verificando se o email já existe no bd
$querySelect = $conn->query("SELECT * FROM tb_user_email WHERE user_email = '$email'");
$array_emails = [];

//carregando o array com os emails vindo do BD
while ($emails = $querySelect->fetch_assoc()) :
    $email_exist = $emails['user_email'];
    array_push($array_emails, $email_exist);
endwhile;

//Se o email estiver dentro do array, significa que ele já foi usado na landing page
if (in_array($email, $array_emails)) {
    $_SESSION['msg'] = "<p class = 'text-center text-danger'>" . 'Email já cadastrado' . "</p>";
    //redireciona a page
    header("Location:../../index.php");
} else {
    //senao insere o email, e nome no banco de dados
    $queryInsert = $conn->query("INSERT INTO tb_user_email  (user_name, user_email, data_add) VALUES('$name', '$email', now())");
    $affected_rows = mysqli_affected_rows($conn);

    //Se tudo correr bem, mostra a msg.
    if ($affected_rows > 0) {
        $_SESSION['msg'] = "<p class = 'text-center text-success'>" . 'Cadastrado realizado com sucesso!' . "</p>";
        header("Location:../../index.php");
        exit();
    }
}
// fechando a conexão
mysqli_close($conn);
