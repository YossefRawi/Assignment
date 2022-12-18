<?php
$servername="localhost";
$username="root";
$password="";
$dbname="register";


$con = mysqli_connect($servername ,$username ,$password ,$dbname);

if(!$con){
		die("connection failed:". $con -> connect_error);
		
	}else{
echo "<h3>connection successful</h3>";
	}
?>