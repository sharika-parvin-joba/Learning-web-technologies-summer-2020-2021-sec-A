<html>
<head></head>
<body>
<fieldset>
<legend>GENDER</legend>
<form action="B.php" method="post">



<input type="radio" name="gender">Male
<input type="radio" name="gender">Female
<input type="radio" name="gender">Others

<br><hr>
<input type="submit" >


<form>
</fieldset>

<br>

<?php echo $_POST['gender'] ; ?>
</body>
</html>