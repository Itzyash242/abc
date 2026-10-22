<?php
session_start();
include('dbconfig.php');
$email= $_POST['email'];
$password = $_POST['password'];
$sql="select * from user where uemail='$email' and upwd='$password'";
$result = mysqli_query($con,$sql);
$num = mysqli_fetch_array($result);
if ($num > 0 )
{
	$_SESSION['uemail']=$num['uemail'];
    $_SESSION['uid']=$num['uid'];
    $_SESSION['uname']=$num['uname'];
	echo "<script>alert ('Login Sucessfully')</script>";
	echo "<script>window.open('index.php','_self')</script>";
}
else
{
	echo "<script>alert ('Login Failed')</script>";
	echo "<script>window.open('login.php','_self')</script>";
}



?>