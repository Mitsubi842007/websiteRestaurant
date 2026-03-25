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
    
$host = "db";
$db = "mydatabase";
$user = "user";
$password = "password";
$charset = "utf8mb4";
 
 
$opties = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
 
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
 
try{
    $pdo = new PDO($dsn, $user, $password, $opties);
    echo "Connected to the database successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die("Unable to connect to the database.");
}
 $sql =  "SELECT * FROM `J eten`";
 
 $statement = $pdo->prepare($sql);
 $statement->execute();
 $Jeten = $statement->fetchAll() ;
 print_r($Jeten);
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
            <?php
foreach ($naam = $Jeten) {
$naam = $Jeten{"naam"};
$omschrijving = $Jeten{""};


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