<?php
	
	$email = $_POST['email'];

	if($email == null){
		echo 'invalid data';
	}else{
		echo "Valid data: ".$email;		
	}

?>

