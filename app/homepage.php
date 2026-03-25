<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet">

    <!-- Main stylesheet controls all page styles. Edit `restaurant.css` to change colors, spacing and layout. -->
    <link rel="stylesheet" href="restaurant.css">
</head>

<body>

    <div class="container">
        <!-- `.container` centers content and limits max width. Change percent or max-width in CSS to widen/narrow the site. -->

        <!-- HEADER -->
        <header>
            <div class="logo">
                <img src="afbeeldingen/sakura leaf logo.png" alt="Sakura leaf logo">
                <!-- Logo: replace image file to change the logo. `site-title` text shown next to image. -->
                <span class="site-title">Mitsu no Sakura</span>
            </div>

            <nav class="menu">
                <a href="homepage.php">Home</a>
                <a href="contact.php">Contact</a>
                <a href="informatie.php">Informatie</a>
                <a href="menupage.php">Menu</a>
                <a href="loginpage.php">Log in</a>
            </nav>
        </header>

        <!-- HERO: big banner area. Background image and size are set with `.hero-placeholder` in CSS. -->
        <section class="hero">
            <div class="hero-placeholder">
                welkom bij Mitsu no Sakura
            </div>
        </section>

        <!-- CONTENT -->
        <section class="two-column">
            <div class="col white-box">
                <h2>hai!</h2>
                <p>
                    welkom op de website van Mitsu no Sakura, een Japans restaurant in het hart van de stad. We zijn
                    trots op onze authentieke gerechten, bereid met verse ingrediënten en traditionele recepten. Of je
                    nu zin hebt in sushi, ramen of een andere Japanse lekkernij, bij ons ben je aan het juiste adres.
                    Kom langs en ervaar de smaak van Japan bij Mitsu no Sakura!
                </p>
            </div>

            <div class="col white-box">
                <h2>Over Ons</h2>
                <p>
                    Mitsu no Sakura is opgericht in 2010 door chef-kok Hiroshi Tanaka, die zijn passie voor de Japanse
                    keuken wilde delen met de wereld. Met meer dan 20 jaar ervaring in de culinaire industrie, heeft
                    chef Hiroshi een menu samengesteld dat zowel traditionele als moderne Japanse gerechten bevat.
                    Onze missie is om onze gasten een onvergetelijke eetervaring te bieden, waarbij we de rijke smaken
                    en cultuur van Japan tot leven brengen in elk gerecht dat we serveren.
                </p>
            </div>
        </section>

    </div>

</body>

</html>