<html>

<head></head>
<body>
<table>
<table border="1" height="500" width=500 >
 <thead align="right">
<tr>
<th>
<img src="pic1.jpg" height="100px" width="150px" align="Left" >
<a href="Home.html"  >Home</a>|
<a href="Login.html" >Login</a>|
<a href="Registration.html" >Register</a>
</th>
</tr>
</thead><br>

<tbody>
<tr>
<th>
<form method="post" action="Registration.php">
<fieldset>
<legend>Registration</legend>

Name:             <input type="text" name="name"><br><hr>
Email:            <input type="email" name="email"><br><hr>
Username:         <input type="text" name="username"><br><hr>
Password:         <input type="password" name="password"><br><hr>
Confirm Password: <input type="password" name="confirmpassword"><br><hr>
<fieldset>
<legend>Gender</legend>

 <input type="radio" name="gender">Male
  <input type="radio" name="gender">Female
  <input type="radio" name="gender">Others 
</fieldset><br><hr>
    
<fieldset>
<legend>Date of Birth</legend>

<input type="date" name="dbo">

</fieldset><br><hr>

<input type="submit" name="submit" value="Submit">
<input type="submit" name="reset" value="Reset">

</fieldset>

</form>
</th>
</tr>
</tbody>

<tfoot>

<tr>
<th>
Copyright &copy 2017
</th>
</tr>

</tfoot>

</table>
</body>

</html>