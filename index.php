<?php
	include_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert data into database</title>
</head>
<body>
	<form action="insert.php" method="POST">
	<input type="number" placeholder="Enter book id" name="bookid"/>
	<input type="text" placeholder="enter title" name="title"/>
	<input type="text" placeholder="enter price" name="price"/>
	<input type="submit" name="submit" value="insert"/>
	</form>
</body>
</html>