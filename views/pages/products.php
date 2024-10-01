<?php
session_start();
 if(!$_SESSION["isLoggedIn"]){
  header("Location:http://localhost/CarDelership/views/pages/login.php");
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <link href="./products.css" rel="stylesheet" />
</head>
<body>
    <?php include"../components/Header/header.php" ?>
    <?php include"../components/menu/menu.php" ?>
    <div class="products-container">

    <?php function display($src,$price,$manufacturer,$model,$id,$product){
            echo   "<a href='./product.php?id=$id&product=$product'>
            <div class=\"wrapper\">
    <div class=\"product-container\">
    <img class=\"car-img\" src={$src} alt=\"Car Photo\"/>
    <div>
        <h3>Price: {$price}</h3>
        <h4>Manufacturer: {$manufacturer}</h4>
        <h4>Model: {$model}</h4>
    </div>
   </div>
          </div>
          </a>
          "; 
        }
        
        ?>
       
 
    </div>

    <?php include"../components/Footer/footer.php"?>
   <script src="../components/Header/header.js"></script>
</body>
</html>