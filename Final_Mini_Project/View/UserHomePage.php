<php

	session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
<table border="1" height=300 width=300>

<tbody>
	<tr>
		<th>
	<h1>Welcome home! <?php echo $_SESSION['user']['name']; ?> </h1><br><br><br>
    <a href="Profile.php">Profile</a><br>
     <a href="ChangePassword.php">Change Password</a><br>
     <a href="Logout.php">Logout</a><br>
</th>
</tr>
</tbody>

	 <h1>Welcome home! <?php echo $_SESSION['user']['name']; ?> </h1>
	
</table>	
</body>
</html>

<?php
	
	}else{
		header('location:Login.php');
	}
?>

