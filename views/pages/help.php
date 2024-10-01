<?php 
session_start();
if(!$_SESSION["isLoggedIn"]){
    header("Location:http://localhost/CarDelership/views/pages/login.php");
   }
include"../../controllers/helpControl.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
$userName=$_SESSION["userName"];
$problem=$_POST["problem"];
$contactMe=$_POST["select"];
if(isset($userName)&&isset($problem)&&isset($contactMe)){
    $res=setHelp($userName,$problem,$contactMe);
    if($res){
        echo"Succsessfully Submited";
        header("Location:http://localhost/CarDelership/views/pages/welcome.php");
    }
    else{
        echo "Please Try Again";
    }
}
else{
    echo"OOPS something went wrong";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help </title>
    <link rel="stylesheet" href="./help.css"/>
</head>
<body>
    <?php include("../components/Header/header.php") ?>
    <h1>Help </h1>
    <h2 class="white">Please Write us the issues or Feddbacks you have for us freely we will reach you within 48 hours. </h2>
    <form action="help.php" method="post">
        <div class="f-div">
        <label>What is The Problem ?</label>
        <textarea name="problem"></textarea> <br>
        </div>
        <div class="f-div">
      <label>Contact Me By</label>
      <select name="select" >
        <option value="email">My Email</option>
        <option value="phone"> My PhoneNumber</option>
      </select>
    </div>
    <input type="submit" value="submit"/>
    </form>
    <?php include("../components/Footer/footer.php") ?>
</body>
</html>