<?php

session_start();


$con = mysqli_connect('localhost','root','');
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}

mysqli_select_db($con, 'bday1');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date =  $_POST['date'];


$query = " select * from contactus where email = '$email'  ";

$result = mysqli_query($con, $query);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" duplicate data email id exists";
	
}
else{

	$qy= " insert  into contactus(name ,email ,phone ,date) values ('$name' ,'$email' , '$phone' ,'$date') ";
	mysqli_query($con, $qy);
	echo "Data inserted";

}


header("Location:mit.html");

?>