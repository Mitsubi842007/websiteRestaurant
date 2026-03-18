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

                <!-- LOGIN TYPE SELECTOR -->
                <!-- <div class="login-type-selector" style="margin-bottom: 20px;">
                    <button type="button" class="login-type-btn active" data-type="user">Klant</button>
                    <button type="button" class="login-type-btn" data-type="admin">Admin</button>
                </div> -->

                <!-- USER LOGIN FORM -->
                <form name="userLoginForm" action="" method="post">
                    <label for="email">E-mailadres</label>
                    <input id="email" name="email" type="email" placeholder="jouw@voorbeeld.nl" required>

                    <label for="password">Wachtwoord</label>
                    <input id="password" name="password" type="password" placeholder="••••••••" required>

                    <button type="submit">log in</button>

                    <div class="login-footer">
                        <a href="#">Wachtwoord vergeten?</a>
                    </div>
                </form>
<?php
print_r($_POST);




?>
                <!-- ADMIN LOGIN FORM -->
                <form id="adminLoginForm" action="#" method="post" style="display: none;">
                    <label for="adminCode">Admin Code</label>
                    <label style="font-size: 12px; color: #999;"></label>
                    <input id="adminCode" type="password" placeholder="Voer admin code in" required>

                    <button type="submit">log in</button>

                    <div class="login-footer" style="text-align: center; font-size: 12px; color: #999;">
                        Standaard code: <strong>admin</strong>
                    </div>
                </form>
            </div>
        </section>

    </div>

 

    </div>

</body>

</html>