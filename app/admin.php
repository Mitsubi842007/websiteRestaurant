<?php
session_start();
require_once("pdo.php");

// Check if user is logged in
if (!isset($_SESSION["username"])) {
    header("Location: loginpage.php");
    exit();
}

// Check if user is an admin
$sql = "SELECT * FROM login WHERE username = :username";
$stmt = $pdo->prepare($sql);
$stmt->execute([":username" => $_SESSION["username"]]);
$user = $stmt->fetch();

if (!$user || $user["usertype"] !== "admin") {
    header("Location: loginpage.php");
    exit();
}

// Fetch menu items
$sql = "SELECT * FROM Jeten ORDER BY id DESC";
$items = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
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
            <a href="uitloggen.php">Log out</a>
        </nav>
    </header>

    <!-- ADMIN CONTENT -->
    <main class="admin-main">
        <div class="admin-header">
            <h1>Gerechten Beheer</h1>
            <a href="createItem.php" class="search-btn">+ Nieuw Item</a>
        </div>

        <table class="admin-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Naam</th>
                    <th>Beschrijving</th>
                    <th>Prijs (€)</th>
                    <th>Afbeelding</th>
                    <th>Acties</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($items): ?>
                    <?php foreach ($items as $item): ?>
                        <tr>
                            <td><?= htmlspecialchars($item["id"]) ?></td>
                            <td><?= htmlspecialchars($item["naam"]) ?></td>
                            <td><?= htmlspecialchars($item["beschrijving"]) ?></td>
                            <td>€<?= htmlspecialchars($item["prijs"]) ?></td>
                            <td>
                                <img src="afbeeldingen/<?= htmlspecialchars($item["image"]) ?>" 
                                     width="60" alt="gerecht">
                            </td>
                            <td>
                                <a href="editItem.php?id=<?= $item["id"] ?>" class="edit-btn">Bewerk</a>
                                <a href="deleteItem.php?id=<?= $item["id"] ?>" 
                                   class="delete-btn"
                                   onclick="return confirm('Weet je zeker dat je dit item wilt verwijderen?');">
                                   Verwijder
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">Geen items gevonden.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </main>
</div>
</body>
</html>