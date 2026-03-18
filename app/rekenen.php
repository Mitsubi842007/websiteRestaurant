<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekenen</title>
</head>

<body>
    <form name="register" action="rekenen.php" method="post">
        <p>first name : <input type="text" name="first" /></p>
        <p>last name : <input type="text" name="last" /></p>
        <p><input type="submit" name="submit" value="sign in" /></p>

        <?php
print_r($_POST);
echo "<br>";

        if (isset($_POST['submit'])) {
            $firstName = $_POST['first'];
            echo "First Name: " . $firstName . "<br />";
            $lastName = $_POST['last'];
            echo "last Name: " . $lastName . "<br />";
        }

        ?>


</body>

</html>