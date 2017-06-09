<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	#create{
		height: 25px;
		background-color: #78B766;
		border: 0px;
		border-bottom: 1px solid gray;
		border-top: 1px solid gray;
		border-radius: 3px;
		color:white;
		font-weight: 700;
		margin-top: -10px;
		margin-bottom: 15px;
		-webkit-transition: all 250 ease;
		   -moz-transition: all 250 ease;
		    -ms-transition: all 250 ease;
		     -o-transition: all 250 ease;
		        transition: all 250 ease;
	}
	#create:hover{
		cursor: pointer;
		box-shadow: 0px 0px 5px gray;
	}
	h2{
		color: #333333;
		font-family: arial;
	}
	th{
		border: 1px solid #DDDDDD;
		font-family: arial;
		padding: 12px 25px 12px 4px;
		margin-right: -20px;

	}
	td{
		border: 1px solid #DDDDDD;
		font-family: arial;
		padding: 15px
	}
	form{
		display: inline-block;
	}
	#read {
		border: 0px;
		border: 1px solid #D4D4D4;
		border-bottom: 1px solid #B3B3B3;
		background-color: #ECECEC;
		border-radius: 2px;
		padding: 5px 15px;
		color: black;
	}
	#read:hover{
		cursor: pointer;
		box-shadow: 0px 0px 5px gray;
	}
	#update{
		background-color: #78B766;
		border-radius: 2px;
		border: 0px;
		border-bottom: 1px solid gray;
		border-top: 1px solid gray;
		color: white;
		font-weight: 700;
		padding: 5px 15px;
	}
	#update:hover{
		cursor: pointer;
		box-shadow: 0px 0px 5px gray;
	}
	#delete{
		background-color: #C15549;
		border-radius: 2px;
		border: 0px;
		border-bottom: 1px solid gray;
		border-top: 1px solid gray;
		color: white;
		font-weight: 700;
		padding: 5px 15px;
	}
	a{
		text-decoration: none;
	}
	#delete:hover{
		cursor: pointer;
		box-shadow: 0px 0px 5px gray;	
	}
</style>
<body>
<h2>PHP CRUD Grid</h2>
<form action="insert.php">
 	<input type="submit" value="Create" id="create">
 </form>
<?php 
	$host = "localhost";
	$user_name = "root";
	$password = "";
	$db_name = "blog";
	$db_connection = mysqli_connect($host, $user_name, $password, $db_name);	

	if($db_connection){
		$sql = "SELECT * FROM User";
		$query = mysqli_query($db_connection, $sql); ?>

		<table>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>E-mail</th>
				<th>Phone Number</th>
				<th>Action</th>
			</tr>
			<?php 
				while ($row = mysqli_fetch_assoc($query)){?>
					<tr> 
					<?php 
					  foreach ($row as $key => $value) { 
					  	?>

					  	<td> <?= $value ?> </td>
					  	
				<?php } ?>
						<td> 
							<a id="read" href='read.php?id=<?=$row['id']?>'>Read</a>
							<a id="update" href='update.php?id=<?= $row['id']?>'>Update</a>
							<a id="delete" href='delete.php?id=<?= $row['id']?>'>Delete</a>
						</td>
					</tr> <?php }?>
		</table>
	<?php	}else{
		echo "Cannot connected";
	}
 ?>
 
</body>
</html>
	<!-- 			<td><form action="" method="post" >
					<input type="submit" value="Read" id="read" >
				</form>
				<form action="" method="post">
					<input type="submit" value="Update" id="update">
				</form>
				</td>  -->