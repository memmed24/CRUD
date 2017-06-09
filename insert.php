<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	input{
		display: block;
		padding: 5px 10px;
		margin-bottom: 5px;
	}
	#Create{

	}
	#Back{
		margin-top: -34px;
		margin-left: 75px;
	}
</style>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="text" name="name" placeholder="name">
		<input type="text" name="surname" placeholder="e-mail">
		<input type="text" name="phone" placeholder="phone number">
		<input type="submit" name="submit" value="Create" id="Create">
	</form>		
	<form action="index.php">
		<input type="submit" name="back" value="Back" id="Back">
	</form>
</body>
</html>

<?php 

include 'db.php';
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$number = $_POST['phone'];

	if(!empty($name)&&!empty($surname)&&!empty($number)){
		$sql = "INSERT INTO user(name,email,phone) VALUES('$name', '$surname', '$number')";	
		$query = mysqli_query($db_connection, $sql);

		if ($query) {
			header('Location: index.php');
		}else{
			echo "error launched";
		}
	}else{
		echo "You haven't filled it up!";
	}
	
}

?>

<!-- $sql = "INSERT INTO workers(name,email,number) VALUES('$name', '$surname', '$age')";	
	$query = mysqli_query($db_connection, $sql);

	if ($query) {
		header('Location: index.php');
	}else{
		echo "error launched";
	} -->