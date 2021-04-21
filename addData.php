<?php
$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$address = $_POST['address'];

echo "Name is".$name;
echo "Age is".$age;
echo "Contact Number is".$phone;
echo "Address is".$address;

include 'db.php';
$sql = "INSERT INTO staff(name, age, phone, address)VALUES('$name','$age','$phone', '$address')";
$result = mysqli_query($conn, $sql);
if($result){
	header('Location:project.php');
}
?>