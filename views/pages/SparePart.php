
<?php
include"./products.php";
include"../../controllers/productControl.php";
$src="audi/audi1.png";
 $ret = getSpareParts();
 if(!$ret){
    echo "Coonection Error Couldn't get the Cars";
 }
 else{
    while($row=mysqli_fetch_assoc($ret)){
        display("../assets/".$row["img"],$row["price"],$row["manufacturer"],$row["model"],$row["id"],"spareParts");
    }
 }
?>