<?php 

require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$dbHost = getenv('DB_HOST');
$dbUser = getenv('DB_USER');
$dbPassword = getenv('DB_PASSWORD');
$dbName = getenv('DB_NAME');

$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

if(!$conn){
    echo 'error' . $conn->error_log;
}else{
    echo '....';
}

?>