<?php 
require '../../vendor/autoload.php';

$dbHost = getenv('DB_HOST');
$dbUser = getenv('DB_USER');
$dbPassword = getenv('DB_PASSWORD');
$dbName = getenv('DB_NAME');

$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

?>