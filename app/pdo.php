<?php
$host = "db";
$db = "mydatabase";
$user = "user";
$password = "password";
$charset = "utf8mb4";

$opties = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $password, $opties);
} catch (PDOException $e) {
    die("Unable to connect to the database.");
}