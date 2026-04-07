<?php 
SESSION_start();





?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

    <link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="restaurant.css">
</head>

<body>
    <?php
include("pdo.php");
 
    $sql = "SELECT * FROM `J eten`";

    $statement = $pdo->prepare($sql);
    $statement->execute();
    $Jeten = $statement->fetchAll();
    print_r($Jeten);
    ?>

  

    <div class="container">


        <header>
            <!-- logo met titel van de restaurant -->
            <div class="logo">
                <img src="afbeeldingen/sakura leaf logo.png" alt="Sakura leaf logo">
                <span class="site-title">Mitsu no Sakura</span>
            </div>
            <!-- navigatie menu: -->
            <nav class="menu">
                <a href="homepage.php">Home</a>
                <a href="contact.php">Contact</a>
                <a href="informatie.php">Informatie</a>
                <a href="menupage.php">Menu</a>
                <a href="loginpage.php">Log in</a>
               
        </header>

        <section class="hero">
            <!-- Hero area: background image and size are set in `.hero-placeholder` in CSS. Replace the image in `afbeeldingen/` and update CSS if needed. -->
            <div class="hero-placeholder">welkom bij Mitsu no Sakura</div>
        </section>

        <section class="categories">
            <!-- Categories: these buttons can be used for filtering products with JS. Styling in `.categories`. -->
            <span>Categorie</span>
            <button>Japanse Gerechten</button>
        </section>

        <section class="products">


            <?php


            foreach ($Jeten as $gerecht) {

                $naam = $gerecht["naam"];
                $beschrijving = $gerecht["beschrijving"];
                $prijs = $gerecht["prijs"];
                $image = $gerecht["image"];

                if ($image == "") {
                    $image = "placeholder.jpg";
            
                }


                echo "<div class='product' data-id='1' data-name='Sushi Platter' $prijs='15.00'>";
                echo "<div class='product-img'><img alt='' src='afbeeldingen/$image'></div>";
                echo "<div class='product-info'>";
                echo "<h3>$naam</h3>";
                echo "<p>$beschrijving</p>";
                echo " <span class='price'>$prijs</span>";
                echo "       </div>";
                echo "  </div>";
            }


            ?>
        </section>

    </div>


    <footer>

        gemaakt door Anthony Gerrits
    </footer>

    <script src="restaurant.js"></script>
</body>

</html>