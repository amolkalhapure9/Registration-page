<?php

$const=mysqli_connect('localhost','root','amol@1234');

if($const){
	echo test.php;
	
}
else{
	echo "failed";
	
}

mysqli_select_db($const,'amolkalhapure');

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];

$query = "insert into details(name,email,password,phone) values ('$name','$email','$password','$phone')";

mysqli_query($const,$query);






?>