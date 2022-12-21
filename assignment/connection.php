<?php
$servername="localhost";
$username="root";
$password="";
$dbname="register";


$con = mysqli_connect($servername ,$username ,$password ,$dbname);
//Opens a connection to the database

if(!$con){
		die("connection failed:". $con -> connect_error);
		//Output message then terminate the script
		
	}else{
echo "<h3>connection successful</h3>";
	}
?>