<?php 

require_once('../../php/conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['inputName'];
    $desc = $_POST['inputDesc'];
    $sql = "INSERT INTO tasklist (Nome, descricao) VALUES ('$nome', '$desc')";

    if($conn->query($sql) === TRUE){
        echo 'cadastrado com sucesso';
    }else{
        echo 'error' .$conn->error;
    }

    $conn->close();

    header('location: ../../index.php');

}

?>