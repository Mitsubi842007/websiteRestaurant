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
    //variabelen 
    $host = 'db';
    $user = 'user';
    $pass = 'password';
    $db = 'mydatabase';
    $password = 'password';
    $charset = 'utf8mb4';


    //pdo opties
    $opties = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    //dsn
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {
        // create the connection
        $pdo = new pdo($dsn, $user, $pass, $opties);
        //succes melding
        echo "Connected to database successfully!";
    } catch (PDOException $e) {
        //error melding
        echo "Connection failed: " . $e->getMessage();
        //(stop) die //die is een functie die het script stopt 
        die("Sorry, database problem");
    }


    ?>

    <!-- winkel wagen -->
    <div class="cart-panel">
        <div class="cart-header">
            <h2>🛒 Winkelwagen</h2>
            <button class="cart-close-btn" id="closeCart">×</button>
        </div>
        <div class="cart-items" id="cartItems">
            <p class="empty-cart-msg">Je winkelwagen is leeg</p>
        </div>
        <div class="cart-footer">
            <div class="cart-total">
                <strong>Totaal:</strong>
                <span id="cartTotal">€0,00</span>
            </div>
            <button class="checkout-btn">Bestellen</button>
            <button class="clear-cart-btn" id="clearCart">Winkelwagen leegmaken</button>
        </div>
    </div>

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
            <button class="cart-toggle-btn" id="openCart">🛒 (<span id="cartCount">0</span>)</button>
            </nav>
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

            <!-- JAPANESE PRODUCT 1 -->
            <div class="product" data-id="1" data-name="Sushi Platter" data-price="15.00">
                <div class="product-img"><img src="afbeeldingen/sushi-party-platte.jpg" alt="Sushi party platter"></div>
                <div class="product-info">
                    <h3>Sushi Platter</h3>
                    <p>Assortiment verse sushi</p>
                    <button class="add-btn" onclick="addItem(this)">Toevoegen</button>
                    <span class="price">€12,00</span>
                </div>
            </div>

            <!-- JAPANESE PRODUCT 2 -->
            <div class="product" data-id="2" data-name="Ramen Bowl" data-price="9.50">
                <div class="product-img"><img src="afbeeldingen/beef ramen bowl.jpg" alt="Sushi party platter"></div>
                <div class="product-info">
                    <h3>Ramen Bowl</h3>
                    <p>Top sirloin steak (boneless) ,
                        Black pepper ,
                        Beef / oriental-flavored ramen noodles ,
                        Vegetable oil
                        ,
                        Water
                        ,
                        Onion
                        ,
                        Garlic
                        ,
                        Fresh ginger
                        ,
                        Miso paste
                    </p>
                    <button class="add-btn" onclick="addItem(this)">Toevoegen</button>
                    <span class="price">€9,50</span>
                </div>
            </div>

            <!-- JAPANESE PRODUCT 3 -->
            <div class="product" data-id="3" data-name="Tempura Mix" data-price="12.00">
                <div class="product-img"><img src="afbeeldingen/tempura.jpg" alt="Sushi party platter"></div>
                <div class="product-info">
                    <h3>Tempura Mix</h3>
                    <p>Gefrituurde garnalen en groenten</p>
                    <button class="add-btn" onclick="addItem(this)">Toevoegen</button>
                    <span class="price">€6,00</span>
                </div>
            </div>

            <!-- JAPANESE PRODUCT 4 -->
            <div class="product" data-id="4" data-name="Teriyaki Chicken" data-price="11.00">
                <div class="product-img"><img src="afbeeldingen/Teriyaki Chicken.jpg" alt="Sushi party platter"></div>
                <div class="product-info">
                    <h3>Teriyaki Chicken</h3>
                    <p>Kip in sojasaus met rijst</p>
                    <button class="add-btn" onclick="addItem(this)">Toevoegen</button>
                    <span class="price">€10,00</span>
                </div>
            </div>

            <!-- JAPANESE PRODUCT 5 -->
            <div class="product" data-id="5" data-name="Udon Noodles" data-price="8.50">
                <div class="product-img"><img src="afbeeldingen/Udon Noodles.jpg" alt="Sushi party platter"></div>
                <div class="product-info">
                    <h3>Udon Noodles</h3>
                    <p>Dikke noedels in dashi-bouillon</p>
                    <button class="add-btn" onclick="addItem(this)">Toevoegen</button>
                    <span class="price">€8,50</span>
                </div>
            </div>

            <!-- JAPANESE PRODUCT 6 -->
            <div class="product" data-id="6" data-name="Okonomiyaki" data-price="18.00">
                <div class="product-img"><img src="afbeeldingen/Okonomiyaki.jpg" alt="Sushi party platter"></div>
                <div class="product-info">
                    <h3>Okonomiyaki</h3>
                    <p>Bloem, dashi (visbouillon), ei, witte kool, lente-ui, gember, buikspek,
                        Okonomiyakisaus, Japanse mayonaise, aonori (zeewier), katsuobushi (bonito-vlokken)</p>
                    <button class="add-btn" onclick="addItem(this)">Toevoegen</button>
                    <span class="price">€11,00</span>
                </div>
            </div>

        </section>

    </div>


    <footer>

        gemaakt door Anthony Gerrits
    </footer>

    <script src="restaurant.js"></script>
</body>

</html>