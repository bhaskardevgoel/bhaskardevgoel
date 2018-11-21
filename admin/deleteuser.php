<?php
session_start();
mysql_connect('localhost','root','');
mysql_select_db('notes_machine');
$id=$_REQUEST['del'];
$qry="delete from sign_up where id=$id";
$res=mysql_query($qry);
if($res>0)
  {
  echo "<script> alert('User Deleted');
  window.location.href='users.php';</script>";
 }
 else
 {
 echo "<script> alert('User Cant be Deleted');
 window.location.href='users.php';</script>";
 }
?>