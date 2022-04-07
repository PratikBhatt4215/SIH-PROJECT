<?php
session_start();
$con = mysqli_connect('localhost','root');
header('location:contact.php');
if($con){
	echo "connection_succussful";
}else{
	echo "No connection";
}


mysqli_select_db($con, 'sihreg');

$name = $_POST['user'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$query = $_POST['query'];

$query = " insert into  geccontact (user, email, contact,query) values 
('$name', '$email','$contact','$query')  ";  



mysqli_query($con, $query);



?>