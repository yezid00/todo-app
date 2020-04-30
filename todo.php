<?php 
require_once('insert.php');
require_once('delete.php');
require_once('db.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>ToDo App</title>
	<link rel="stylesheet" type="text/css" href="stylesheet_.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="header">
		<h2 class="logo">TodoList</h2>
		<ul class="student">
			<li class="home"><a href="#">Home</a></li>
			<li><a href="about.php">About</a></li>
		</ul>
	</div>


	<div class="add-todo">
		<form action="" method="post"> 
			<input type="text" name="task" placeholder="Add Todo..." class="input-field">
			<!-- <input type="button" value="SUBMIT" name="submit" class="submit"> -->
			<button type="submit" class="btn btn-primary"  name="submit">Save</button>
		</form>
	</div>




	<div class="main">	
		<?php 
			$sql = "SELECT * FROM task";
			$result = $conn->query($sql);
		?>
	<table class="table">
		<?php while($row = $result->fetch_assoc()): ?>
			<tr>
				<td><input type="checkbox" name="my_checkbox" value="false"> <?php echo $row['work'] ?></td>
				<td><span class="del"> <a href="todo.php?delete=<?php echo $row['id'] ?>" class = "btn btn-danger"><i class="fa fa-trash"></i></a></span></td> 
			</tr>
		<?php endwhile ?>
	</table>
	</div>
	<?php
		function pre_r($array){
			echo '<pre>';
			print_r($array);
			echo '</pre>';
		}

	?>
</body>
</html>

<!-- <thead>
			<tr>
				<th>Task</th>
				<th>Action</th>
			</tr>
		</thead> -->

<!-- <tr>
			<td><input type="checkbox" name="my_checkbox"> Code</td>
			<td><span class="del"><button class="btn"><i class="fa fa-trash"></i></button></span></td>
		</tr>

		<tr>
			<td><input type="checkbox" name="my_checkbox"> Code </td>
			<td><span class="del"><button class="btn"><i class="fa fa-trash"></i></button></span></td>
		</tr>

		<tr>
			<td><input type="checkbox" name="my_checkbox"> Code</td>
			<td><span class="del"><button class="btn" ><i class="fa fa-trash"></i></button></span></td>
		</tr> -->