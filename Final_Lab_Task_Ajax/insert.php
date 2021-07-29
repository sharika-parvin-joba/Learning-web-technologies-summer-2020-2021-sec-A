
<?php

include 'conn.php';

if(isset($_POST['subscribe']))
{

$email=$_POST['email'];


$sql= " INSERT INTO `ajax_table`( `email`) VALUES ('$email) ";

$query=mysqli_query($con,$sql);

}


?>


<!-- 

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
<legend>INSERT</legend>
Email:<br><input type='email' name='email'><br>

<input type='submit' name='submit' value='Submit'>



</fieldset>




    </form>

 -->

</body>
</html>


