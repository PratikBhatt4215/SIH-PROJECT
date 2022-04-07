<?php
session_start();
$con = mysqli_connect('localhost','root');
header('location:Collegedashboard.php');
if($con){
	echo "connection_succussful";
}else{
	echo "No connection";
}


mysqli_select_db($con, 'sihreg');

$name = $_POST['user'];
$password = $_POST['password'];

$query = " insert into  logincmp (user,  password ) values 
('$name','$password') ";  



mysqli_query($con, $query);



?>