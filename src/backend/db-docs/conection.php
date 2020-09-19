<?php
// constantes de conexao
define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'db_shopmee');

// comando de conexao ao bd(mysql)
$conn = mysqli_connect(HOST, USER, PASSWORD, DB) or die('Falha na conexao!');
