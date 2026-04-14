<?php
session_start();
require_once("pdo.php");

// Controleer of de gebruiker is ingelogd
if (!isset($_SESSION["username"])) {
    header("location:loginpage.php");
    exit();
}

// Controleer of de ingelogde gebruiker admin is
$sql = "SELECT * FROM login WHERE username = :username";
$statement = $pdo->prepare($sql);
$statement->execute([":username" => $_SESSION["username"]]);
$user = $statement->fetch();

if (!$user || $user["usertype"] != "admin") {
    header("location:loginpage.php");
    exit();
}

// Lees het id van het te bewerken item uit de URL
$id = isset($_GET["id"]) ? intval($_GET["id"]) : 0;
if ($id <= 0) {
    header("Location: admin.php");
    exit();
}

$message = "";
$errors = [];

// Lees bestaande itemgegevens uit de database (Read)
$sql = "SELECT * FROM Jeten WHERE id = :id";
$statement = $pdo->prepare($sql);
$statement->execute([":id" => $id]);
$item = $statement->fetch();

if (!$item) {
    header("Location: admin.php");
    exit();
}

// Vul formulierwaarden met de bestaande gegevens
$naam = $item["naam"];
$beschrijving = $item["beschrijving"];
$prijs = $item["prijs"];
$image = $item["image"];

// Verwerk de update wanneer het formulier wordt verzonden (Update)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $naam = trim($_POST["naam"] ?? "");
    $beschrijving = trim($_POST["beschrijving"] ?? "");
    $prijs = trim($_POST["prijs"] ?? "");
    $image = trim($_POST["image"] ?? "");

    if ($naam === "") {
        $errors[] = "Naam is verplicht.";
    }
    if ($beschrijving === "") {
        $errors[] = "Beschrijving is verplicht.";
    }
    if ($prijs === "" || !is_numeric($prijs) || floatval($prijs) < 0) {
        $errors[] = "Voer een geldige prijs in.";
    }

    if ($image === "") {
        $image = "placeholder.jpg";
    }

    if (empty($errors)) {
        try {
            $sql = "UPDATE Jeten SET naam = :naam, beschrijving = :beschrijving, prijs = :prijs, image = :image WHERE id = :id";
            $statement = $pdo->prepare($sql);
            $statement->execute([
                ":naam" => $naam,
                ":beschrijving" => $beschrijving,
                ":prijs" => number_format((float) $prijs, 2, '.', ''),
                ":image" => $image,
                ":id" => $id,
            ]);

            $message = "Item succesvol bijgewerkt.";
        } catch (PDOException $e) {
            $errors[] = "Kon item niet bijwerken. Controleer je database verbinding.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bewerk item</title>
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="restaurant.css">
</head>
<body>
    <div class="container">
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
                <a href="admin.php">Admin</a>
            </nav>
        </header>

        <section class="white-box">
            <h1>Bewerk menu-item</h1>

            <?php if ($message): ?>
                <div class="success-message"><?php echo htmlspecialchars($message); ?></div>
            <?php endif; ?>

            <?php if (!empty($errors)): ?>
                <div class="error-message">
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo htmlspecialchars($error); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="POST" action="editItem.php?id=<?php echo urlencode($id); ?>" class="create-item-form">
                <label>
                    Naam
                    <input type="text" name="naam" value="<?php echo htmlspecialchars($naam); ?>" placeholder="Bijv. Sushi" required>
                </label>

                <label>
                    Beschrijving
                    <textarea name="beschrijving" rows="4" placeholder="Bijv. Verse sushi met zalm" required><?php echo htmlspecialchars($beschrijving); ?></textarea>
                </label>

                <label>
                    Prijs
                    <input type="number" name="prijs" step="0.01" min="0" value="<?php echo htmlspecialchars($prijs); ?>" placeholder="Bijv. 12.50" required>
                </label>

                <label>
                    Afbeelding bestandsnaam
                    <input type="text" name="image" value="<?php echo htmlspecialchars($image); ?>" placeholder="Bijv. sushi.jpg">
                </label>

                <button type="submit" class="search-btn">Bijwerken</button>
            </form>

            <p style="margin-top: 16px; font-size: 14px; color: #555;"><a href="admin.php">Terug naar admin</a></p>
        </section>
    </div>
</body>
</html>
