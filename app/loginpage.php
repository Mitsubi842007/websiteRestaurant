<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

    <link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="restaurant.css">
</head>

<body>
    <script src="restaurant.js"></script>
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

        <body>
            <!-- LOGIN AREA -->
            <section class="login-page">
                <!-- banner area: currently holds a small placeholder photo for PFP -->
                <div class="login-banner">
                    <img src="path/to/pfp-placeholder.png" alt="PFP placeholder">
                </div>
                <div class="login-card">
                    <div class="login-header">
                        <h2>Welkom</h2>
                        <p>Log in om verder te gaan.</p>
                    </div>


                    <!-- USER LOGIN FORM -->
                    <form name="register" action="loginpage.php" method="post">
                        <p>email adress : <input type="text" name="email" /></p>
                        <p>wachtwoord : <input type="text" name="wachtwoord" /></p>
                        <p><input type="submit" name="submit" value="sign in" /></p>

                        <?php

                      



                        ?>



                </div>



    </div>

</body>

</html>