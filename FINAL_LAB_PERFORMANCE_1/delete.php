<?php

require('../model/conn.php');

$name=$_GET['name'];

$q="DELETE FROM `products` WHERE 'name'=$name";

mysqli_query($con,$q);

header('location:display.php');


?>