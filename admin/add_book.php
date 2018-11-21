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
	<center><p class="font"><font color="black">Add Books Here.</font></p></center><br><br><br>
	<center><div style="height:70%; width:50%; background-color:rgba(200,200,200,0.7);
	box-shadow:5px 10px 10px rgba(0,0,0,0.5); border-radius:30px;"><br><br><table>
	<form name="pro" method="POST" action="add_book_data.php" enctype="multipart/form-data">
		<tr><td colspan="2"><pre class="input">Book Name:</pre><br>
		<input class="box_1" size="76" type="text" name="book_name" placeholder="Book Name" required><br><br></td></tr>
		
		<tr><td colspan="2"><pre class="input">Subject Name:</pre><br>
		<input class="box_1" size="76" type="text" name="subject" placeholder="Subject" required><br><br></tr></td>
		
		<tr><td>
		<pre class="input">Semester Number:</pre><br>
		<select class="box_1" name="sem_id" style="width:150px;"required>
		<option>Semester Number</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
			</select><br><br>
			</td>	
		<td>
		<pre class="input">Trade</pre><br>
		<select class="box_1" name="trade_id"  style="width:150px;" required>
		<option>Trade</option>
		<option value="1">CAC</option>
		<option value="2">CAF</option>
		<option value="3">CFF</option>
		<option value="4">CTD</option>
		<option value="5">CWG</option>
		<option value="6">CDE</option>
		<option value="7">CSME</option>
		<option value="8">CTV</option>
		<option value="9">CEN</option>
		<option value="10">CSMM</option>
		<option value="11">CPT</option>
		<option value="12">CPF</option>
		<option value="13">CBM</option>
		</select><br><br>
			</td></tr>
			<tr><td>
		<pre class="input">Upload the image of Book</pre><br>
		<input type="file" name="cover_image"required><br><br>
				</td><td>
		<pre class="input">Upload Book here:</pre><br>
				<input type="file" name="link"required><br><br>
				</td><td>
				<tr><td colspan="2"><pre>							    <input type="submit" class="button2" value="Add Book"></pre></td></tr>
		</form>
		</table>
		</div>
		</center>
</div>
</div>
</body>
</html>