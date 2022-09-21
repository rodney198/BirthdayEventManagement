<?php

session_start();


$con = mysqli_connect('localhost','root','');
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}

mysqli_select_db($con, 'bday1');

$mail=$_POST['email'];
$uname=$_POST['uname'];
$mob=$_POST['mob'];
$psw=$_POST['pass'];


$query = " select * from users where email = '$email'  ";

$result = mysqli_query($con, $query);

$num = mysqli_num_rows($result);

if($num > 0 ){
	echo" duplicate data email id exists";
	header("Location:loginf.html");
}
else{
	$psw = base64_encode($psw);
	$qy= (" insert  into users(mailid,username,contact,password) values ('$mail' ,'$uname' , '$mob' ,'$psw') ");
	mysqli_query($con, $qy);
	echo "Data inserted";
	header("Location:mit.html");
}




?>