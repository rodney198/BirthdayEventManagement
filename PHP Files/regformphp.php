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
$address = $_POST['address'];
$country = $_POST['country'];
$gender =  $_POST['gender'];
$email= $_POST['email'];
$mobno= $_POST['mobno'];
$username= $_POST['username'];
$pass1= $_POST['pass1'];

$query = " select * from regform where email = '$email'  ";

$result = mysqli_query($con, $query);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" duplicate data email id exists";
	
}
else{
	if($mobno > 7000000000)
	{$qy= " insert  into regform(name,address,country,gender,email ,mobno,username,pass1) values ('$name','$address','$country','$gender','$email' ,'$mobno','$username','$pass1') ";
	mysqli_query($con, $qy);
	echo "Data inserted";
	header("Location:mit.html");
	}
		else{
			header("Location:regm.html");
			
		}
}




?>