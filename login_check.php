<?php
session_start();
include('database.php');
$username=$_POST['username'];
$password=$_POST['password'];
$qry="Select * from sign_up where username='$username' and password='$password'";
$result=mysql_query($qry);
if($row=mysql_fetch_array($result))
{
$_SESSION['username']=$username;
$_SESSION['password']=$password;
header('location:trade2.php');
}
else
{
header('location:signin_fail.php');
}
?>