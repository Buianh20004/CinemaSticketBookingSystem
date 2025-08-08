<?php
$servername = "mysql.railway.internal:3306";
$username = "root";
$password = "UuZvKPAzUVLPmzRDJtogxrALcVLabNOw";
$dbname = "railway";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Kết nối database thất bại: " . $e->getMessage());
}
