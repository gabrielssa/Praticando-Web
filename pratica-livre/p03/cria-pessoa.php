<?php

$host = "127.0.0.1";
$user = "pmauser";
$password = "ax1v09p2";
$db_name = "test";

$conexao = mysqli_connect($host, $user, $password);
$banco = mysqli_select_db($conexao,$db_name);
mysqli_set_charset($conexao,'utf8');

if (!$conexao) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$nome = $_POST['nome'];
$id = $_POST['id'];

$insert = "INSERT INTO tb_pessoa (id, nome) VALUES ('$id','$nome')";

if ($conexao->query($insert) === TRUE) {
    echo "Nova pessoa foi cadastrada";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conexao);

?>