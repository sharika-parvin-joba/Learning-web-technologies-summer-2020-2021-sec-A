<?php

include('conn.php');

$id=$_GET['empname'];

$q="DELETE FROM `admin` WHERE empname=$id ";

mysqli_query($con,$q);




?>