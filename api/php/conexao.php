<?php 

$host = 'db.dooqutqvqrngxnjlapay.supabase.co';
$port = '5432';
$dbname = 'tasklist';
$user = 'postgres';
$password = 'emigam7344@';

$conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);

?>