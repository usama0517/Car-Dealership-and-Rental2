<?php
session_start();
?>
<?php
 include("../../controllers/userControl.php");

 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $userName = $_POST["userName"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $email=$_POST["email"];
  if(isset($userName)&&isset($password)&&isset($repassword)&&isset($email)){
    if($password==$repassword){
       $res= setUser($userName,$password,$email);
       if(!$res){
        echo"Failed to create Acount Sorry Try again!!!";
       }
       else{
        echo "succsessfullly Created";
        $_SESSION["isLoggedIn"]=true;
        $_SESSION["userName"]=$ret["userName"];
        header("Location:http://localhost/CarDelership/views/pages/welcome.php");
       }
    }
    else{
        echo"Please Enter The Passwords Correctly they should match! <br>";
    }
  }
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./login.css" />
</head>
<body>
    <div class="main">
        <form method="post" action="signUp.php">
            <label>User Name: </label>
            <input type="text" name="userName" required /> <br>
            <label>Password: </label>
            <input type="password" name="password" required /> <br>
            <label>ReType : </label>
            <input type="password" name="repassword" required /> <br>
            <label>E-Mail : </label>
            <input type="email" name="email" required /> <br>
            <input type="submit" value="Log-In" name="logIn">
            
        </form>
    </div>
</body>
</html>
