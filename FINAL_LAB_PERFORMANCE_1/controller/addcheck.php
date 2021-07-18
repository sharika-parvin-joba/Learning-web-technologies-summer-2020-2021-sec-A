<?php 

require('../model/conn.php');

if(isset($_POST['submit']))
{

$name=$_POST['name'];
$buyingprice=$_POST['buyingprice'];
$sellingprice=$_POST['sellingprice'];


$q= " INSERT INTO `products`(`Name`, `Buying Price`, `Selling Price`)  VALUES ('$name','$buyingprice','$sellingprice') ";

$query=mysqli_query($con,$q);

header('location:../view/add.php');

}






?>
