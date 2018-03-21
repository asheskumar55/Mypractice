
<?php
	include_once 'connection.php'; 
	if(isset($_POST['submit']))
	{
			$bookid = $_POST['bookid'];
			$price= $_POST['price'];
			$title= $_POST['title'];
			$sql = "INSERT INTO book (bookid, price, title)
			VALUES ('$bookid', '$price', '$title')";

			if (mysqli_query($conn, $sql)) {
			    echo "New record created successfully";
			}
			 else 
			 {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
	}
 ?>