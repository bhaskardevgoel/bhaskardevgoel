<html>
<head>
<title>Add Books</title>
<link rel="stylesheet" href="../css/admin_main.css" />
<link rel="icon" href="../image/icon.png" />
</head>
<body class="back_2">
<div class="admin_div_3">
<?php
include('admin_div.php');
?>
<div class="admin_div_4">
	<center><p><font size="72">Edit Pages Here</font></p></center><br><br><br><br>
	<center><div style="height:70%; width:70%; background-color:rgba(0,0,0,0.1);
	box-shadow:5px 10px 10px black; border-radius:30px;">
	<table width="100%" height="100%">
	<?php
	include('database.php');
	$qry="select * from edit_page";
	$res=mysql_query($qry);
	while($row=mysql_fetch_array($res))
	{
	?>
	<form name="edit" action="edit_page_data.php" method="post">
	<tr><th>
	<fieldset>
	<legend>HEADING</legend><br>
	<input type="text" class="box_1" name="heading" size="70" value="<?php echo $row['heading']; ?>">
	<br><br>
	</fieldset>
	</th></tr>
	
	<tr><td>
	<fieldset>
	<legend>ABOUT</legend><br>
	<center><textarea rows="6" cols="100" name="about">
	<?php echo $row['about']; ?>
	</textarea></center>
	<br><br>
	</fieldset>
	</td></tr>
	<input type="hidden" name="head" value="1">
	<tr><th><input type="submit" class="button2"value="Update"></th></tr>
	<?php
	}
	?>
	
	</table>
	</div>
</div>
</div>
</body>
</html>