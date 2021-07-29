<?php

include('conn.php');

$email=$_GET['email'];

$sql="DELETE FROM `ajax_table` WHERE email=$email ";

mysqli_query($con,$sql);

// header('location:display.php');


?>