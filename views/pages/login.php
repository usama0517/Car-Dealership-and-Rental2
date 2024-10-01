<?php 

session_start();
session_destroy();
session_start();

?>
<?php 
include("../../controllers/userControl.php");


if($_SERVER["REQUEST_METHOD"]=="POST"){
   
   $ret= getUser($_POST["userName"],$_POST["password"]);
    if($ret==0){
        echo "Invalid username or Password Try Again <br>";
    }
    else{
       // echo $ret["userName"] ."<br>";
       // echo $ret["password"] ."<br>";
       $_SESSION["isLoggedIn"]=true;
       $_SESSION["userName"]=$ret["userName"];
        header("Location:http://localhost/CarDelership/views/pages/welcome.php");
        
    }
  
} 

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="./login.css" />
</head>
<body>
    <div class="main">
        <form method="post" action="login.php">
            <label>User Name: </label>
            <input type="text" name="userName" required /> <br>
            <label>Password: </label>
            <input type="password" name="password" required /> <br>
            <input type="submit" value="Log-In" name="logIn">
            <a href="./signUp.php">Sign up?</a>
        </form>
    </div>
</body>
</html>