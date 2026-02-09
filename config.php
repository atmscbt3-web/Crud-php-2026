<?php
$host = "localhost";
$db = "curso_php";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
} catch (Exception $e) {
    die("Error de conexión");
}
?>
