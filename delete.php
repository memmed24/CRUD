<?php  
include "db.php"; 
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "DELETE FROM employee WHERE id='$id'";
	$query = mysqli_query($db_connection, $sql);

	if($query){
		header('Location:index.php');
	}else{
		echo "Cannot deleted";
	}

}
?>