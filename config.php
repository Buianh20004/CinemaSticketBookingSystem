<?php
$host = getenv("DB_HOST");
$port = getenv("DB_PORT");
$dbname = getenv("DB_NAME");
$username = getenv("DB_USER");
$password = getenv("DB_PASSWORD");

$conn = new mysqli($host, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die(" Kết nối thất bại: " . $conn->connect_error);
}
?>
