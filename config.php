<?php
$host = getenv('DB_HOST');
$port = getenv('DB_PORT');
$dbname = getenv('DB_NAME');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');

$conn = new mysqli($host, $username, $password, $dnname, $port);

//chec connection

if($conn->connect_error){
    die("ket noi taht bai".$conn->connect_error);
}

?>
