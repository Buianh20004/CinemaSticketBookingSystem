<?php
$host ="mysql.railway.internal";
$port ="3306";
$dbname ="railway";
$username = "root";
$password ="UuZvKPAzUVLPmzRDJtogxrALcVLabNOw";

$conn = new mysqli($host, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die(" Kết nối thất bại: " . $conn->connect_error);
}
?>
