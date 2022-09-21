
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$username = $_POST['uname'];
$password = $_POST['pass'];
$password=base64_encode($password);


if ($username&&$password)
{
$connect = mysqli_connect("localhost","root","");
mysqli_select_db($connect, "bday1") or die("couldn't find database");
$query = mysqli_query($connect, "select * from users where username='$username'");
$numrows = mysqli_num_rows($query);



if($numrows!=0)
{
while($row = mysqli_fetch_assoc($query))
{
$dbusername= $row['username'];
$dbpassword = $row['password'];

}
if($username==$dbusername && $password==$dbpassword)
{
echo 'Login successful';
header('location:mit.html');
$_SESSION['username']= $username;
}
else
echo 'Incorrect Password';
}
else
die("That username doesnt exist");
}
else
die("Please enter username and password");
mysqli_close($connect);
?>
</body>
</html>
