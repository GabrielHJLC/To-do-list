<?php
require_once('../../php/conexao.php');
// Captura os dados enviados pelo formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Consulta SQL para verificar se o usuário existe
$consulta = "SELECT * FROM login WHERE email = '$email' AND senha = '$senha'";
$resultado = mysqli_query($conn, $consulta);

if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_assoc($resultado);
    $id_usuario = $row['id'];

    session_start();
    $_SESSION['id'] = $id_usuario;

    header("Location: ../../index.php");
} else {
    echo "Email ou senha inválidos.";
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>