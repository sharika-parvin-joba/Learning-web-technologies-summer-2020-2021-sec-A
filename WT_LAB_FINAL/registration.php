<?php

if(isset($_GET['msg'])){
$msg=$_GET['msg'];
if($msg== 'null'){

echo "null value found";

}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Company Registration</title>
</head>
<body id='reg'>
    
   
        <table>
        <table border="1" height="400" width=700 id='registration'>
         <thead align="right">
        <tr>
        <th>
      
        
        <a href="Login.php" >Login</a>|
        <a href="Registration.php" >Register</a>
        </th>
        </tr>
        </thead><br>
        
        <tbody>
        <tr>
        <th>
        <form action='../controller/RegistrationCheck.php' method='post'>
        <fieldset>
        <legend style="color:rgb(70, 70, 112); font-family: sans-serif; font-size: 20px;">Registration</legend>

        <div class='registration' id='empname'>
        Employee Name:         <input type="text" name="empname" required> <a href="update.php">update</a> <a href="delete.php">delete</a><br>
        </div >
        <div class='registration'>
        Company Name:             <input type="text" name="comname" required> <a href="update.php">update</a> <a href="delete.php">delete</a><br>
        </div >
        <div class='registration'>
        Contact No:            <input type="number" name="contact" required> <a href="update.php">update</a> <a href="delete.php">delete</a><br>
        </div>
        <div class='registration'>
        Username:         <input type="text" name="username" required> <a href="update.php">update</a> <a href="delete.php">delete</a><br>
        </div>
        <div class='registration'>
        Password:         <input type="password" name="password" required> <a href="update.php">update</a> <a href="delete.php">delete</a><br>
        </div>
        
        
        
        <input id='submitregistration' type="submit" name="submit" value="Submit"><br>
        
        Already a member?<a href="login.php">Login now</a>
        
        </fieldset>
        
        </form>
        </th>
        </tr>
        </tbody>
        
        <tfoot>
        
        <tr>
        <th>
        Copyright &copy 2021
        </th>
        </tr>
        
        </tfoot>
        
        </table>




        <script src="script.js"> </script>


</body>
</html>