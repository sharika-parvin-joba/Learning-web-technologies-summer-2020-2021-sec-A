<html>
<head></head>
<body>
<fieldset>
<legend>DEGREE</legend>
<form action="B.php" method="post">

<input type="checkbox" name="degree" value="ssc" >SSC
<input type="checkbox" name="degree" value="hsc">HSC
<input type="checkbox" name="degree" value="bsc">BSc
<input type="checkbox" name="degree" value="msc">MSc



<br><hr>
<input type="submit" >


<form>
</fieldset>

<br>

<?php 

$degree=$_POST['degree'];

if($degree=='ssc')
{
echo ("SSC");
}
else if($degree=='hsc')
{
echo ("HSC");
}
else if($degree=='bsc')
{
echo ("BSc");
}
else if($degree=='msc')
{
echo ("MSc");
}


 ?>
</body>
</html>