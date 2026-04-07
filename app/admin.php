<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="admin.css">    
</head>

<body>
    <?php 
    include("pdo.php");
    $_SESSION_start;
   
 
    $sql = "SELECT * FROM `J eten`WHERE id = :id" ;


    $statement = $pdo->prepare($sql);
    $statement->bindValue(":id" , 4);
    
    $statement->execute();
    $Jeten = $statement->fetchAll();
    print_r($Jeten);
    
    
    
    
        
    ?>
   
    
</body>

</html>