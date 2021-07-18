<?php

include('..model/conn.php');


if(isset($_POST['submit']))
{

$name=$_POST['name'];    

$buyingprice=$_POST['buyingprice'];
$sellingprice=$_POST['sellingprice'];
;

$q= " update 'products' set UPDATE `products` SET `Name`='$name',`Buying Price`='$buyingprice',`Selling Price`='$sellingprice' where 'Name'=$name ";

$query=mysqli_query($con,$q);

//header('location:display.php');

}


?>