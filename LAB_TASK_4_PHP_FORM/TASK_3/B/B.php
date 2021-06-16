<html>
<head></head>
<body>
<fieldset>
<legend>Email</legend>
<form action="B.php" method="post">


dd<input type="number" name="dbo">/mm<input type="number" name="dbo2">/yyy<input type="number" name="dbo3">/<br><hr>
<input type="submit" >


<form>
</fieldset>

<br>

<?php



echo $_POST['dbo'] ;
echo $_POST['dbo2'] ;
echo $_POST['dbo3'] ;

?>
</body>
</html>