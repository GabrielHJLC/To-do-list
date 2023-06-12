<?php 

require_once('../../php/conexao.php');
require_once('login.php');


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $email_DB = $conn->query("SELECT email FROM login");

    if(mysqli_num_rows($email_DB) > 0){
        echo 'conta existente';
    }else{
        $sql = "INSERT INTO login (name, email, senha) VALUES ('$nome', '$email', '$senha')";

        $conn->query($sql);
    }

}

?>