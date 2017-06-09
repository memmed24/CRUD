<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	li{
		display: block;
	}
	li:nth-child(even){
		background-color: #E2E3E2;
	}
	input{
		display: block;
		margin-bottom: 10px;
		padding: 15px 50px 15px 5px;
	}
</style>
<body>
	<h2>Update a Customer</h2>
	<form action="" method="post">
		<input type="text" name="name" placeholder="New Name..." >
		<input type="text" name="email" placeholder="New E-mail..." >
		<input type="text" name="phone" placeholder="New Phone..." >
		<input type="submit" name="update" value="update">
	</form>
	<form action="index.php">
		<input type="submit" value="back">
	</form>
	<?php 
	include "db.php";
	
		if (isset($_POST['update'])) {
			$id = $_GET['id'];
			$new_name = $_POST['name'];	
			$new_email = $_POST['email'];
			$new_phone = $_POST['phone'];

			if(!empty($new_name)&&!empty($new_email)&&!empty($new_phone)){

					$sql = "UPDATE User SET name='$new_name', email='$new_email', phone='$new_phone' WHERE id='$id'";
					$query = mysqli_query($db_connection, $sql);
					if ($query) {
						header('Location: index.php');
					}else{
						echo "error launched";
					}
			}else{
				echo "error";
			}
		}
	 ?>
		
</body>
</html>