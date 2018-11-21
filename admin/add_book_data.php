<?php
$book_name=$_REQUEST['book_name'];
$subject_name=$_REQUEST['subject'];
$sem_id=$_REQUEST['sem_id'];
$trade_id=$_REQUEST['trade_id'];
$cover_image=$_FILES['cover_image']['name'];
$temp_image=$_FILES['cover_image']['tmp_name'];
$path="books/covers/".$cover_image;
move_uploaded_file($temp_image,$path);
$link=$_FILES['link']['name'];
$temp_image2=$_FILES['link']['tmp_name'];
$path2="books/books/".$link;
move_uploaded_file($temp_image2,$path2);
include('database.php');
$qry="insert into books(book_name,subject,trade_id,sem_id,cover_image,link) values('$book_name','$subject_name','$trade_id','$sem_id','$path','$path2')";
$res=mysql_query($qry);
if($res>0)
{
include('admin_panel.php');
}
else
{
echo  "<head><link rel='stylesheet' href='../css/main.css'></head><body class='back_2'><br><br><br><br><br><br><br><br><br><br><br><br><br><br><center><p class='font'>Book Add Failed</p></center></body>";
}
?>