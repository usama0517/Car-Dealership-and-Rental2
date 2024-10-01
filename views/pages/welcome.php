<?php
session_start();
 if(!$_SESSION["isLoggedIn"]){
  header("Location:http://localhost/CarDelership/views/pages/login.php");
 }
?>
<style>
<?php include"./welcome.css" ?>

    </style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
    <?php include"../components/Header/header.php" ?>
    <?php include"../components/menu/menu.php" ?>
    <div class="welcome-container">
<div class="left">
<h1>Hello Welcome To our Car Market</h1>
<p>What do you Want to see  </p>
   <a href="./carForSale.php">
      <div class="welcome-opt">
    Car For Sale
   </div>
    </a>
    <a href="./carForSale.php">
  <div class="welcome-opt">
    Car For Rent
  </div>
</a> 
<a href="./SparePart.php">
  <div class="welcome-opt">
   Spare Parts
  </div>
</div>
</a>
<div class="right asstetic">

</div>
    </div>
    <?php include"../components/Footer/footer.php" ?>
    <script src="../components/Header/header.js"></script>
</body>
</html>