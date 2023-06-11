<?php 

require_once('../../php/conexao.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['inputName'];
    $desc = $_POST['inputDesc'];
    $sql = "UPDATE `tasklist` SET `Nome` = '$nome', `descricao` = '$desc' WHERE `tasklist`.`id` = $id;";

    if($conn->query($sql) === TRUE){
        echo 'cadastrado com sucesso';
    }else{
        echo 'error' .$conn->error;
    }

    $conn->close();

    header('location: ../../index.php');

}

?>