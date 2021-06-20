<html>

<head></head>
<body>
<table border="1" height="500" width=700 >
 <thead align="right">
<tr>
<th colspan="2">
<img src="pic1.jpg" height="100px" width="150px" align="Left" >
Logged in as<a href=""  > Bob</a>|
<a href="" >Logout</a>|

</th>
</tr>
</thead><br>

<tbody align="left">
<tr>
<th>
<b>Account</b><hr><br>
<ul>
<li>
<a href="Dashboard.php">Dashbox</a></li><br>
<li><a href="View_Profile.php">View Profile</a></li><br>
<li><a href="Edit_Profile.php">Edit Profile</a></li><br>
<li><a href="Profile_Picture.php">Change Profile Picture</a></li><br>
<li><a href="Change_Password.php">Change Password</a></li><br>
<li><a href="Logout.php">Logout</a></li><br>


</ul>
</th>


<th width=70%>

<form>
<fieldset>
<legend><b>Edit Profile</b></legend>

Name:<input type="text" name="name"><br><hr>
Email:<input type="email" name="email"><br><hr>
Gender:<input type="radio" name="gender">Male
          <input type="radio" name="gender">Female
          <input type="radio" name="gender">Others
<br><hr>

Date of Birth:<input type="date" name="dbo"><br><hr>

<input type="submit" name="submit" value="Submit">

</fieldset>
</form>
</th>


</tr>
</tbody><br>

<tfoot >
<tr>
<th colspan="2">
Copyright &copy 2017
</th>
</tr>
</tfoot>

</table>
</body>

</html>