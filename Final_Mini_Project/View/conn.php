<?php

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'mini_project');

if($con){
    echo "connected";
}else{
    echo "not connected";
}

?>