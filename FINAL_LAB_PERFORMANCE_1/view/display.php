


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    

<form method='post' action='../controller/displaycheck.php'>
<fieldset>
    <legend>DISPLAY</legend>
<table border="1">

<tr>
    <td>Name</td>
    <td>Profit</td>
    <td colspan="2"></td>
    <!-- <td></td> -->
</tr>

<?php

include '../model/conn.php';

include ('addcheck.php');
$profit=$_POST['profit'];



$q= " SELECT * FROM `products` ";

$query=mysqli_query($con,$q);

while($res=mysqli_fetch_array($query))
{

    

?>

<tr>
    <td> <?php echo $res['name']; ?> </td>
    <td> <?php echo $res['profit']; ?> </td>
    
    <td>  <a href="delete.php?name=<?php echo $res['name']; ?>">delete</a> </td>
    <td> <a href="edit.php?name=<?php echo $res['name']; ?>">edit</a> </td>
</tr>

<?php

}

?>



</table>

</fieldset>
</form>

</body>
</html>