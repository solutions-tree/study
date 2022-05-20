<?php
require 'db.php';
$name=$_POST['name'];
$fname=$_POST['fname'];
$phoneno=$_POST['phoneno'];

if(isset($_POST['id'])){
$id=$_POST['id'];
$sql = "UPDATE users SET name='$name', fname='$fname',phoneno='$phoneno' WHERE id=$id";
$message="data updated successfully";
} else {
$sql = "INSERT INTO users  (name, fname, phoneno)
VALUES ('$name', '$fname', '$phoneno')";
$message="New record created successfully";
}
if ($conn->query($sql) === TRUE) {
  echo $message;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
$url="https://localhost/crud/list.php";
header('Location: ' . $url, true);
exit();
?>