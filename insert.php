<?php 
require_once('db.php');

if(isset($_POST['submit'])){
	$task = $_POST['task'];

	if(empty($task)){
		echo "Field is required";
	}
	else{
		// $sql = "INSERT INTO `task`(`work`) VALUES('".$task."')" or die($conn->connect_error);
		$sql = "INSERT INTO `task`(`work`) VALUES('".$task."')" or die($conn->error);
		$conn->query($sql);
	}

	header("location:todo.php");

}


?>