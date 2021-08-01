<?php
	session_start();

	if(isset($_POST['submit'])){
        
        $id=$_POST['id'];  
		$password= $_POST['password'];
		$confirmpassword=$_POST['confirmpassword'];
        $name=$_POST['name'];
        $email= $_POST['email'];
        $usertype=$_POST['usertype'];
        

		if($name != '' && $password != '' && $username != '' ){
			
			//$user =['name'=> $name, 'email'=>$email, 'username'=> $username, 'password'=>$password, 'confirmpassword'=>$confirmpassword,'add'=>$address,'dos'=>$startingdate];
			//$_SESSION['user'] = $user;

            $user=$name.",".$email.",".$username.",".$password.",".$confirmpassword.",".$address.",".$startingdate;

           
			header('location: ../view/login.php');
		}else{
			header('location:../view/Registration.php?msg=null');
		}
	}else{
		echo "invalid request...";
	}

?>