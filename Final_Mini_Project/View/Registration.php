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
    <title>Registration</title>
</head>
<body>
    <form>
      <fieldset>
        <legend id='registration'>Registration</legend>
        <div class='registration' id='id'>Id<br><input type="number" name="id"></div>
        
        <div class='registration' id='password'>Password<br><input type="password" name="password"></div>
       
        <div class='registration' id='confirmpassword'>Confirm Password<br><input type="password" name="confirmpassword"></div>
      
        <div class='registration' id='name'> Name<br><input type="text" name="name"></div>
       
        <div class='registration' id='email'> Email<br><input type="email" name="email"></div>
      
        <div class='registration' id='usertype'>  User type<br><select name="usertype">
            <option>Admin</option>
            <option>User</option>
            
        </select></div>
      <br><br>

        <input class='submitregistration' type="submit" name="submit" value="Registration">
        <a href="Login.php">Login</a>


      </fieldset>


    </form>


    <script>


     </script> 
</body>
</html>