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
		<h1>Update contact</h1>
	</header>
	<?php
	include 'db.php';
	$id = $_GET['id'];
	$sql = "SELECT * FROM staff WHERE id = .$id";
	$result = mysqli_query($conn,$sql);
	if($result){
		$row = mysqli_fetch_assoc($result);
		$contactname = $row['name'];
		$contactage = $row['age'];
		$contactphone = $row['phone'];
		$contactaddress = $row['address'];


	}
	?>
	
	<form action="editAction.php" method="post">
		<div class="main">
			<label for="name">Name:</label><br>
			<input type="text" name="name" id="name" value="<?php global $contactname; echo $contactname; ?>" required><br>
			<label for="age">Age:</label><br>
			<input type="number" name="age" id="age" value="<?php global $contactage; echo $contactage; ?>" ><br>
			<label for="phone">Contact:</label><br>
			<input type="number" name="phone" id="phone" value="<?php global $contactphone; echo $contactphone; ?>" required><br>
			<label for="phone">Address:</label><br>
			<input type="text" name="address" id="address" value="<?php global $contactaddress; echo $contactaddress; ?>"><br>
			<br>
			<input type="hidden" name="id" id="id" value="<?php global $id; echo $id; ?>" required>
			<input type="submit" value="Make changes">
		</div>
	</form>

</body>
</html>
