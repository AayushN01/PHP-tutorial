<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Contact App</title>
</head>
<body>
	<header>
		<h1>Contact App</h1>
	</header>
	<form action="addData.php" method="post">
		<div class="main">
			<label for="name">Name:</label><br>
			<input type="text" name="name" id="name" required><br>
			<label for="age">Age:</label><br>
			<input type="number" name="age" id="age" ><br>
			<label for="phone">Contact:</label><br>
			<input type="number" name="phone" id="phone" required><br>
			<label for="phone">Address:</label><br>
			<input type="text" name="address" id="address"><br>
			<br>
			<input type="submit" value="submit">
		</div>
	</form>
	<hr>
	<h1>List of contact</h1>
	<table>
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Contact</th>
			<th>Address</th>
			<th>Change/Delete</th>
		</tr>
	<?php
	include 'db.php';
	$sql = "SELECT * FROM staff";
	$result = mysqli_query($conn, $sql);

	if($result){
		while($row = mysqli_fetch_assoc($result)){
			$id = $row['id'];
			$name = $row['name'];
			$age = $row['age'];
			$phone = $row['phone'];
			$address = $row['address'];
		?>
		<tr>
			<td><?php echo $name ?></td>
			<td><?php echo $age ?></td>
			<td><?php echo $phone ?></td>
			<td><?php echo $address ?></td>
			<td>
			<a href="edit.php?id=<?php echo $id; ?>">Edit</a>
			<a href="delete.php?id=<?php
			echo $id; ?>">Delete</a>
			</td>
		</tr>	
		<?php
		}
	}
	?>
	</table>
</body>
</html>
