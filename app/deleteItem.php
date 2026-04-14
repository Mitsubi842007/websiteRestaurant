<?php
session_start();
require_once("pdo.php");

// Controleer of de gebruiker is ingelogd
if (!isset($_SESSION["username"])) {
    header("location:loginpage.php");
    exit();
}

// Controleer of de gebruiker een admin is
$sql = "SELECT * FROM login WHERE username = :username";
$statement = $pdo->prepare($sql);
$statement->execute([":username" => $_SESSION["username"]]);
$user = $statement->fetch();

if (!$user || $user["usertype"] != "admin") {
    header("location:loginpage.php");
    exit();
}

// Verwijder het item als het formulier is ingediend (Delete)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = isset($_POST["id"]) ? intval($_POST["id"]) : 0;

    if ($id > 0) {
        try {
            $sql = "DELETE FROM Jeten WHERE id = :id";
            $statement = $pdo->prepare($sql);
            $statement->execute([":id" => $id]);
        } catch (PDOException $e) {
            // Je kunt hier een foutmelding opslaan als je dat wilt
        }
    }
}

// Keer terug naar de admin-pagina na verwijderen
header("Location: admin.php");
exit();
