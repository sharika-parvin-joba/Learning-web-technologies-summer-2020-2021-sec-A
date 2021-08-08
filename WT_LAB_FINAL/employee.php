<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Employees</title>
</head>
<body>
    

    <table>
        <table border="1" height="500" width=700 id='employee' >
         
        <thead align="right">
        <tr>
        <th>
      
        
        <a href="login.php" >Login</a>|
        <a href="registration.php" >Register</a>
        </th>
        </tr>
        </thead><br>

        <tbody align="center";>
        <tr>
        <th>
        <form action='Employees.php' method='post' enctype='multipart/form-data'>
        <fieldset align="center" >
        <legend style="color:rgb(70, 70, 112); font-family: sans-serif; font-size: 20px;">Employees Details</legend>
        
        <div class='employee'>
        Company Name:             <input type="text" name="comname" required><a href="update.php">update</a> <a href="delete.php">delete</a><br>
       </div>
       
       <div class='employee'>
        Job title:          <input type="text" name="jobtitle"  required><a href="update.php">update</a> <a href="delete.php">delete</a><br>
        </div>

        <div class='employee'>
        Job location:          <input type="text" name="joblocation"  required><a href="update.php">update</a> <a href="delete.php">delete</a><br>
        </div>

        <div class='employee'>
        Salary:          <input type="number" name="salary"  required><a href="update.php">update</a> <a href="delete.php">delete</a><br>
        </div>
     
        
       
       
        <input id='submitemployee' type="submit" name="submit" value="Submit">
       
        
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
<br><br>

<?php


$filename=$_FILES['image']['name'];
$filesize=$_FILES['image']['size'];
$filetemp=$_FILES['image']['tmp_name'];

$location= 'images/'.$filename;

if(move_uploaded_file($filetemp,$location))
//source destination,
{
    echo "DONE";
}else{
    echo "error";
}


?>
<br>

<?php


session_start();

if(isset($_POST['submit']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['add'];
$gender=$_POST['gender'];
$dbo=$_POST['dbo'];


if($name != '' && $email != '' && $address != '')
{
    $employee=['name' => $name ,'email' => $email, 'add' => $address,'gender' => $gender, 'dbo' => $dbo];
    $_SESSION['Employess']=$employee;
    echo "All the employees informations are set";

}else{
echo "not set";

}

}


?>


        

</body>
</html>