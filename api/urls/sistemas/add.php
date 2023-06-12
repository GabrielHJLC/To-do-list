<?php 

if (isset($_GET['id_user'])) {
    $id_user = $_GET['id_user'];
}

require_once('../../php/conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['inputName'];
    $desc = $_POST['inputDesc'];
    $sql = "INSERT INTO tasklist (Nome, descricao, Id_user) VALUES ('$nome', '$desc', '$id_user')";

    if($conn->query($sql) === TRUE){
        echo 'cadastrado com sucesso';
    }else{
        echo 'error' .$conn->error;
    }

    $conn->close();

    header("Location: ../../index.php?id_user=$id_user");

}

?>