<?php

include('conn.php');


if(isset($_POST['submit']))
{

$id=$_GET['empname'];    
$username=$_POST['username'];
$password=$_POST['password'];

$q= " update admit set empname=$id, username='$username',password='$password' where empname=$id ";

$query=mysqli_query($con,$q);



}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
  
    <form method='post' action=''>
<fieldset>
<legend>Update Operation</legend>
Username:<br><input type='text' name='username'><br>
Password:<br><input type='password' name='password'><br><hr>
<input type='submit' name='submit' value='Submit'>



</fieldset>
