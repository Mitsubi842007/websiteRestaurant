<?php

$host="localhost";
$user="root";
$password="";
$db="user";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="select * from login where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

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
                <a href="loginpage.php">Log in</a>
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