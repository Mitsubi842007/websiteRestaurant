<?php 
session_start();
include("pdo.php");

// Check if user is logged in as admin
if(!isset($_SESSION["username"])) {
    header("location:loginpage.php");
    exit();
}

$sql = "SELECT * FROM login WHERE username = :username";
$statement = $pdo->prepare($sql);
$statement->execute([":username" => $_SESSION["username"]]);
$user = $statement->fetch();

if(!$user || $user["usertype"] != "admin") {
    header("location:loginpage.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="restaurant.css">
    <link rel="stylesheet" href="admin.css">    
</head>

<body>
    <div class="container">
        <!-- HEADER -->
        <header>
            <div class="logo">
                <img src="afbeeldingen/sakura leaf logo.png" alt="Sakura leaf logo">
                <span class="site-title">Mitsu no Sakura</span>
            </div>

            <nav class="menu">
                <a href="homepage.php">Home</a>
                <a href="contact.php">Contact</a>
                <a href="informatie.php">Informatie</a>
                <a href="menupage.php">Menu</a>
                <?php if(isset($_SESSION["username"])) { ?>
                    <a href="uitloggen.php">Log out</a>
                <?php } ?>
            </nav>
        </header>

        <!-- ADMIN CONTENT -->
        <main class="admin-main">
            <div class="admin-header">
                <h1>Gerechten Beheer</h1>
           
        
                 
              
            
    </div>
</body>

</html>