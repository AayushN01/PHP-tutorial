<?php
include 'db.php';
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sql = "UPDATE staff SET name = '$name', age='$age', phone='$phone', address='$address' WHERE id = $id ";
$result = mysqli_query($conn, $sql);
if($result){
	header("location:project.php");
}
?>