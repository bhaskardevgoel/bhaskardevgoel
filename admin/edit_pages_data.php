<?php
$id=$_REQUEST['head'];
$heading=$_REQUEST['heading'];
$about=$_REQUEST['about'];
include('database.php');
$qry="update edit_page set heading='$heading',about='$about' where id='$id'";
$res=mysql_query($qry);
if($res>0)
{
echo "<script> alert('Update Successful'); 
window.location.href='index.php'; </script>";
}
else
{
echo "Update unsuccessful";
}
?>