<?php
	require_once('DB_config.php');
	
	function validate($username, $password){

		$conn = getConnection();
		$sql = "select * from users where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) > 0 ){
			return true;
		}else{
			return false;
		}
	}

	function getUserByID($id){

		$conn = getConnection();
		$sql = "select * from users where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($user = mysqli_fetch_assoc($result)){
			array_push($users, $user);
		}

		return $users;
	}


	function deleteUser($id){
          $conn = getConnection();
         $id=$_GET['id'];

       $sql="DELETE FROM `crudtable` WHERE id=$id ";

         mysqli_query($conn,$sql);
	}


	function updateUser($user, $id){
if(isset($_POST['submit']))
{

$id=$_GET['id'];    
$username=$_POST['username'];
$password=$_POST['password'];

$sql= " update crudtable set id=$id, username='$username',password='$password' where id=$id ";

$query=mysqli_query($conn,$sql);
       
          
	}

	function insertUser($user){
		

     if(isset($_POST['submit']))
{

$username=$_POST['username'];
$password=$_POST['password'];

$sql= " INSERT INTO `crudtable`( `username`, `password`) VALUES ('$username','$password') ";

$query=mysqli_query($conn,$sql);

}
	}

?>