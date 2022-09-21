<?php
$con= mysqli_connect("localhost","root","");
mysqli_select_db($con,"bday1") or die();
$username=$_POST['uname']; 
$pwd1=$_POST['psw1'];
if (isset($_POST['delete'])) {
$q1=("DELETE from users where username='$username'");

$res=mysqli_query($con,$q1);
}
else
{
	die();
}

header("Location:mit.html");
?>