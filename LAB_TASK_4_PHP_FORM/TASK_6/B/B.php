<html>
<head></head>
<body>
<fieldset>
<legend>BLOOD GROUP</legend>
<form action="B.php" method="post">


<select name="bg">

<option  value="A+">A+</option>
<option  value="B+">B+</option>
<option  value="O+">O+</option>

</select>

<br><hr>
<input type="submit" name="submit" >





<form>
</fieldset>

<br>

<?php 

if(isset($_POST['submit'])){
$selected_val = $_POST['bg'];  
echo "You have selected :" .$selected_val;  
}

 ?>
</body>
</html>