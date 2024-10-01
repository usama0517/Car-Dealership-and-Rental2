<?php
 $path=__DIR__."/model/dataBase.php";
include $path;

function getCars(){
    
    $sql="SELECT * FROM cars Where type='sale'";
   $res= mysqli_query($GLOBALS['conn'],$sql);
   if(mysqli_num_rows($res)>0){
    
    mysqli_close($GLOBALS['conn']);
    return $res;
}
else{
    mysqli_close($GLOBALS['conn']);
    return 0;
}
}

function getRentals(){
    $sql="SELECT * FROM cars Where type='rent'";
    $res= mysqli_query($GLOBALS['conn'],$sql);
    if(mysqli_num_rows($res)>0){
     
     mysqli_close($GLOBALS['conn']);
     return $res;
 }
 else{
     mysqli_close($GLOBALS['conn']);
     return 0;
 }
 }

 function getSpareParts(){
    $sql="SELECT * FROM spareParts";
    $res= mysqli_query($GLOBALS['conn'],$sql);
    if(mysqli_num_rows($res)>0){
     
     mysqli_close($GLOBALS['conn']);
     return $res;
 }
 else{
     mysqli_close($GLOBALS['conn']);
     return 0;
 }
 }

  function getProduct($id,$table){
    $sql="SELECT * FROM $table where id='$id'";
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


?>  