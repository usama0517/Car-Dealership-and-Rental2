<?php
session_start();
 if(!$_SESSION["isLoggedIn"]){
  header("Location:http://localhost/CarDelership/views/pages/login.php");
 }
 include"../../controllers/productControl.php";
$id= $_GET["id"];
$product=$_GET["product"];
$ret=getProduct($id,$product);
$img = "../assets/".$ret["img"];
if($product=="cars"){

$img2="../assets/".$ret["img2"];
$img3="../assets/".$ret["img3"];
$price=$ret["price"];
$milage=$ret["milage"];
$engine=$ret["engine"];
$model=$ret["model"];
$year=$ret["year"];
$description=$ret["description"];
}
else if($product=="spareParts"){
    $price=$ret["price"];
    $name =$ret["name"];
    $manufacturer=$ret["manufacturer"];
    $model=$ret["model"];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product detail</title>
    <link rel="stylesheet" href="./productDetail.css"/>
</head>
<body>
    <?php include"../components/Header/header.php" ?>
    <?php include"../components/menu/menu.php" ?>
    <?php
    if($product=="cars"){
    echo"
    <div class=\"cont\">
        <div class='arrow' id=\"left\" onclick=\"prev()\"><</div>
    <div class=\"img-holder\">
    <div id=\"img1\">
        <img class=\"img img1\"  src=$img>
        </div>
        <div class=\"inner-img\" id=\"img2\">
        <img class=\"img img2\"  src=$img2>
        </div>
        <div id=\"img3\" class=\"inner-img\">
        <img class=\"img img3\"  src=$img3>
        </div>
        
    </div>
    <div class='arrow' id=\"right\" onclick=\"Next()\">></div>
    </div>
        <h3>Price: $price$  </h3>
        <h3>Milage: $milage KM </h3>
        <h3>Engine: $engine </h3>
        <h3>Model: $model </h3>
        <h3>Year: $year </h3>
    </div>
       <div>
        <h1>Description</h1>
        <p>$description</p>
        <button>BUy</button>
       </div>";
    }
    else if($product=="spareParts"){
        echo"
        <div class='img-holder'>
            <img class='img' src=$img>
        </div>
        <div>
            <h3>Price: $price$  </h3>
            <h3>Name: $name</h3>
            <h3>Manufacturer: $manufacturer  </h3>
            <h3>Model: $model </h3>
            
        </div>
           <div>
            <h1>Description</h1>
            <h2>$name</h2>
            <button>BUy</button>
           </div>";
        }
           
    
       ?>
    <?php include"../components/Footer/footer.php" ?>
    <script src="../components/Header/header.js"> </script>
    <script>
        var counter =0;
        
          let img1 = document.getElementById("img1");
            let img2 = document.getElementById("img2");
            let img3 = document.getElementById("img3");
           let images = [img1,img2,img3];
            //image changer on small screens to Next
           function Next(){
            counter++;
            var prev = counter-1;
            if(counter==3){
                counter=0;
                prev=2;
            }
            images[prev].classList.toggle("inner-img");
            images[counter].classList.toggle("inner-img");

           }
           //image changer on small screens to previos
           function prev(){
            counter--;
            var prev = counter+1;
            if(counter==-1){
                counter=2;
                prev=0;
            }
            images[prev].classList.toggle("inner-img");
            images[counter].classList.toggle("inner-img");
           }
           
        
        </script>
</body>
</html>