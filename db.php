<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name ="todo";

$conn = new mysqli($servername,$username,$password,$db_name);

if($conn->connect_error){
	die("Connection error: ". $conn->connect_error);
}


if(isset($_GET['my_checkbox'])){
	$id = $_GET['my_checkbox'];
	my_checkbox :true;

	$sql = "UPDATE task SET checked = 1 WHERE id = '$id'";
	$conn->query($sql);
	header("location:todo.php");
}