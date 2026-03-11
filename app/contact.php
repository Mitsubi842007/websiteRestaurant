<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="restaurant.css">
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
                <a href="loginpage.php">Log in</a>
        </nav>
    </header>

    <!-- HERO -->
    <section class="hero">
        <!-- Hero placeholder: controlled in CSS. Replace background image there to change this banner. -->
        <div class="hero-placeholder">
            welkom bij Mitsu no Sakura
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section class="contact-layout">

        <!-- LINKER KOLOM -->
        <!-- Left column: contact info and map. `.contact-info` and `.map-box` set sizes in CSS -->
        <div class="contact-info">

            <h2>Contact</h2>

            <!-- Map box: replace placeholder with an embedded map or image. Background color set in CSS. -->
            <div class="map-box">
                
            </div>

            <div class="info-text">
                <p><strong>Email:</strong> info@voorbeeld.nl</p>
                <p><strong>Telefoon:</strong> +31 6 12345678</p>
                <p><strong>Adres:</strong> Straatnaam 123, 1234 AB Stad</p>
            </div>

        </div>

        <!-- RECHTER KOLOM -->
        <!-- Right column: contact form. Form fields are required where `required` is set. -->
        <div class="contact-form">

            <h2>Stuur Ons Een Bericht</h2>

            <div class="form-box">
                <!-- Simple contact form: `required` makes fields mandatory. Add `action` to send data to server or handle with JS. -->
                <form>
                    <input type="text" placeholder="Naam" required>
                    <input type="email" placeholder="Email" required>
                    <input type="text" placeholder="Onderwerp">
                    <textarea placeholder="Bericht" required></textarea>
                    <button type="submit">VERZENDEN</button>
                </form>
            </div>

        </div>

    </section>

</div>

</body>
</html>