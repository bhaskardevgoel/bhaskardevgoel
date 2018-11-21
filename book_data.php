<html>
<head>
<title>Add Books</title>
<link rel="stylesheet" href="css/main.css">
</head>
<body class="back_2">
<center><div class="head_1">
<h2>You can add Books here.</h2>
	<form name="pro" method="POST" action="add_book_data.php" enctype="multipart/form-data">
		<input type="text" name="book_name" placeholder="Book Name" required><br><br>
		<input type="text" name="subject" placeholder="Subject" required><br><br>
		<input type="text" name="sem_id" placeholder="Semester Number"required><br><br>
		<input type="text" name="trade_id" placeholder="Trade Number"required>
		<input type="file" name="cover_image"required><br><br>
		<input type="text" name="path" placeholder="Link to Book"required>
		<input type="submit" value="Add Book">
	</form>
	</div>
</center>
	</body>
</html>