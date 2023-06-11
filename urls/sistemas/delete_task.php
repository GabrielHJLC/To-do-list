<?php 

require_once('../../php/conexao.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$sql = "DELETE FROM tasklist WHERE `tasklist`.`id` = $id";

$conn->query($sql);

header('location:../../index.php')

?>