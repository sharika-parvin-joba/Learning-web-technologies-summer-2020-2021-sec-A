<?php

require('../model/conn.php');



// $name=$_POST['name'];
// $profit=$_POST['profit'];

$q= " SELECT * FROM `products` ";

$query=mysqli_query($con,$q);

//header('location:../view/display.php');


?>