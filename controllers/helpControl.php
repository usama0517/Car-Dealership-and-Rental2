<?php
 $path=__DIR__."/model/dataBase.php";
include $path;

function setHelp($userName,$problem,$contactMe){
    $sql="INSERT INTO help (userName,problem,contactMe) value('$userName','$problem','$contactMe')";
    $res = mysqli_query($GLOBALS["conn"],$sql);
    return $res;

}

?>