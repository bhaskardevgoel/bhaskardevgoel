<?php
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

mysql_connect('localhost','root','');

mysql_select_db('my_project');

$qry="insert into sign_in(username,password) values('$username','$password')";
$res=mysql_query($qry);
if($res>0)
{
header('location:login_check.php');
}
else
{
echo "login Unsuccessful";
}
?>