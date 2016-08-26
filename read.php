<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	#id{
		margin: 20px auto;
	}
	li{
		display: block;
	}
	div{
		display: inline-block;
	}
</style>
<body>
<h2>Read a Customer</h2>
<?php 
	include "db.php";
	$id = $_GET['id'];
	$sql = "SELECT * FROM employee WHERE id='$id'";
	$query = mysqli_query($db_connection, $sql);
	$row = mysqli_fetch_assoc($query); ?>
		<div>
			<ul>
				<li>Id</li>
				<li>Name</li>
				<li>E-mail address</li>
				<li>Mobile number</li>
			</ul>
		</div>
		<div>
			<ul>
	<?php foreach ($row as $key => $value) { ?>
		<li> <?php echo $value; ?> </li>
	<?php } ?>
			</ul>
		</div>
</body>
</html>

