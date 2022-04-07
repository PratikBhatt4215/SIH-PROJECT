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
$contact = $_POST['contact'];
$year = $_POST['year'];
$website = $_POST['website'];
$location = $_POST['location'];

$query = " insert into  registerwithcompany (user, email, contact,year,website,location) values 
('$name', '$email','$contact','$year', '$website','$location')  ";  



mysqli_query($con, $query);



?>