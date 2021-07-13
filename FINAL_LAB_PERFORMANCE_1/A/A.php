<?php 



$conn=mysqli_connect('localhost','root','','product_db');

$sql= 'select * from products';
 $result=mysqli_query($conn,$sql);
 $data=mysqli_fetch_assoc($result);
 //print-r($data);

 if(!$conn)
{
    die("sorry we failed to connect: ".mysqli_connect_error());//die function aikhanei program quit kore dibe
}
else{
echo "connection successful<br>";
}  
 mysqli_close($conn);







?>