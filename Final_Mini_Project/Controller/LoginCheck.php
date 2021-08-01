<?php
	session_start();

	if(isset($_POST['submit'])){

		$userId= $_POST['id'];
		$password= $_POST['password'];

           
           

               if($username != '' && $password != ''){
               
                if(!empty($_POST['remember']))
                {
                 
                  $remember=$_POST['remember'];

                  //set cookie

                  setcookie('username',$userId,time()+3600);
                  setcookie('password',$password,time()+3600);

                

                if(trim($user[0]) == $userId && trim($user[1])== $password)
               {
                    setcookie('flag' , 'true', time()+3600 ,'/');
					 header('location: ../view/home.php');

                }else{
				echo 'invalid username/password';
			}}else{
        echo "NOT checked";
      }

		}else{
			echo "null value found...";
		}
	}else{
		echo "invalid request...";
	}

?>