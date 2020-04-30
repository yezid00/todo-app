<?php

require_once('db.php');


if(isset($_GET['delete'])){
	$id = $_GET['delete'];

	$sql = "DELETE FROM `task` WHERE id = '$id'";
	$result = $conn->query($sql);


	header("location:todo.php");
}




