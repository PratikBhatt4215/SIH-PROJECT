<?php
session_start();
$con = mysqli_connect('localhost','root');
header('location:login.php');
if($con){
	echo "connection_succussful";
}else{
	echo "No connection";
}


mysqli_select_db($con, 'sihreg');

$name = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$query = " insert into  signin (user, email, password , cpassword) values 
('$name', '$email','$password', '$cpassword')  ";  



mysqli_query($con, $query);



?>