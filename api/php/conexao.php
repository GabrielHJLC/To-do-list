<?php 

$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = 'emigam2008';
$dbName = 'tasklist';

$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

if(!$conn){
    echo 'error' . $conn->error_log;
}else{
    echo '....';
}

?>
