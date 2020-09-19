<?php
// iniciando sessao do php
include("conection.php");

// query do SQL
$readSelect = $conn->query("SELECT * FROM tb_user_email");

// alimentando a tabela de dados do arquivo 'listData.php'
while ($records = $readSelect->fetch_assoc()) {
    $id = $records['id_user'];
    $email = $records['user_email'];
    $name = $records['user_name'];
    $date = $records['data_add'];
    // conversao do formato de data do mysql para formato br
    $data = date("d/m/Y H:i:s", strtotime($date));

    echo "<tr>";
    echo "<td>$name</td><td>$email</td><td>$data</td>";
    echo "<td><a href='edit.php?id=$id'><img src='../../frontend/node_modules/bootstrap-icons/icons/pencil-square.svg'></a></td>";
    echo "<td><a href='../db-docs/delete.php?id=$id'><img src='../../frontend/node_modules/bootstrap-icons/icons/trash.svg'></a></td>";
    echo "</tr>";
}
