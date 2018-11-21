<html>
<head>
<title>Add Syllabus</title>
<link rel="stylesheet" href="../css/admin_main.css" />
<link rel="icon" href="../image/icon.png" />
<link rel="stylesheet" href="../css/main.css">
</head>
<body class="back_2">
<div class="admin_div_3">
<?php
include('admin_div.php');
?>
<div class="admin_div_4">
	<center><p class="font">Add Syllabus Here.</p></center><br><br><br><br>
	<center><div style="height:70%; width:40%; background-color:rgba(0,0,0,0.3);
	box-shadow:5px 10px 10px black; border-radius:30px;"><table>
	<form name="pro" method="POST" action="add_book_data.php" enctype="multipart/form-data">
		<tr><td>
		<pre class="input">Semester Number:</pre><br>
		<select class="box_1" name="sem_id" required>
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
		<select class="box_1" name="trade_id" required>
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
		<pre class="input">Link:</pre><br>
				<input class="box_1" size="37" type="text" name="link" placeholder="Link to Syllabus"required><br>
				<br></td></tr>
				<tr><td colspan="2"><pre>							    <input type="submit" class="button2" value="Add Syllabus"></pre></td></tr>
		</form>
		</table>
		</div>
		</center>
</div>
</div>
</body>
</html>