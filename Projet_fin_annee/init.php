<?php

$host = 'localhost';
$dbname = 'Project_fin';
$username = 'root';
$port = 3306;
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

session_start();
if (isset($_SESSION["user"])) {
    $iduser = $_SESSION["user"]["iduser"];
    $email = $_SESSION["user"]["email"];
    $pseudo = $_SESSION["user"]["pseudo"];
}