<?php

session_start();
include("pdo.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];

	$sql="SELECT * FROM login WHERE username=:username AND password=:password";
	
	$statement=$pdo->prepare($sql);
	$statement->execute([":username"=>$username, ":password"=>$password]);
	$row=$statement->fetch();

	if($row["usertype"]=="user")
	{	
		$_SESSION["username"]=$username;
		header("location:menupage.php");
	}
	elseif($row["usertype"]=="admin")
	{
		$_SESSION["username"]=$username;
		header("location:admin.php");
	}
	else
	{
		echo "username or password incorrect";
	}
}

?>

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
                <?php if(isset($_SESSION["username"])) { ?>
                    <a href="uitloggen.php">Log out</a>
                <?php } else { ?>
                    <a href="loginpage.php">Log in</a>
                <?php } ?>
            </nav>
        </header>

        <body>
            <?php 
            $_SESSION
            
            
            
            
            ?>

            <!-- LOGIN AREA -->
     <center> 
<h1>login form</h1>
<br><br><br><><br>
<div style="background-color: grey; width: 500px;"> 
<br><br>

<form action="#"method="POST">

<div>
<label>username</label>
<input type="text"name="username"required>
</div>
<br><br>
<div>
   <label>password</label>
<input type="text"name="password"required>
</div>
<br><br>
<div>
<input type ="submit"value="login">
</div>


</form>


<br><br>
</div>
     </center>

                        



                </div>



    </div>

</body>

</html>