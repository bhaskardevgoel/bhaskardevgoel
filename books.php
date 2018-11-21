<html>
	<head>
	<title>
	Books
	</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<center><br><br>
		<h2>
			Please Select your book you want to Download.
		</h2>
		<h5>(click on the cover of book to download)</h5><br><br><br>
		<div class="head_1">
			<table class="table table-striped" width="70%" border="3">
			<tr>
				<th>
					Subject
				</th>
				<th>
					Book name
				</th>
				<th>
					Cover
				</th>
			</tr>
			<?php
			$book=$_REQUEST['s1'];
			$bookt=$_REQUEST['trd'];
			include('database.php');
			$qry="select * from books where trade_id='$bookt' and sem_id='$book'";
			$res=mysql_query($qry);
			while($row=mysql_fetch_array($res))
			{
			?>
			<tr>
				<th>
					<?php echo $row['subject']; ?>
				</th>
				<th>
					<?php echo $row['book_name']; ?>
				</th>
				<th>
					<a href="admin/<?php echo $row['link']?>" download><img src="admin/<?php echo $row['cover_image']?>" height="180" width="130"></a>
				</th>
			</tr>
			<?php
			}
			?>
			</table>
		</div>
		</center>
	</body>
</html>