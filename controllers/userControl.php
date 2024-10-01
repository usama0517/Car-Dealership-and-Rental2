<?php
 $path=__DIR__."/model/dataBase.php";
include $path;

function getUser($userName,$password){
    
    $sql="SELECT * FROM users where userName ='$userName' AND password='$password'";
   $res= mysqli_query($GLOBALS['conn'],$sql);
   if(mysqli_num_rows($res)>0){
    $row = mysqli_fetch_assoc($res);
    mysqli_close($GLOBALS['conn']);
    return $row;
}
else{
    mysqli_close($GLOBALS['conn']);
    return 0;
}
}
function setUser($userName,$password,$email){
    try{
        
    $sql = "INSERT INTO users (userName,password,email) value('$userName','$password','$email')";
    $res= mysqli_query($GLOBALS['conn'],$sql);
    mysqli_close($GLOBALS['conn']);
    return $res;
    }
    catch(mysqli_sql_exception){
        echo"This UserName is Taken Please Try Another User Name <br>";
    }
   
}

?>  