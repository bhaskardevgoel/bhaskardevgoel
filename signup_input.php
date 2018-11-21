<?php
$first_name=$_REQUEST['first_name'];
$last_name=$_REQUEST['last_name'];
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$password_2=$_REQUEST['password_2'];
$month=$_REQUEST['month'];
$day=$_REQUEST['day'];
$year=$_REQUEST['year'];
$dob=$day."/".$month."/".$year;
$gender=$_REQUEST['gender'];
$mobile_number=$_REQUEST['mobile_number'];
$image=$_FILES['image']['name'];
$temp_image=$_FILES['image']['tmp_name'];
$path="images/".$image;
move_uploaded_file($temp_image,$path);
include('database.php');
if($password==$password_2){
$qry="insert into sign_up(first_name,last_name,username,password,password2,dob,gender,mobile_number,image) values('$first_name','$last_name','$username','$password','$password2','$dob','$gender','$mobile_number','$path')";
$res=mysql_query($qry);
if($res>0)
{
header('location:signup_success.php');
}
else
{
echo "Data save Unsuccessful";
}
}
else{
echo "<script>alert('Please check you Password');
window.location.href='signup.php';
</script>";
}
?>