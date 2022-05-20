<?php
require 'db.php';
if(isset($_GET['del'])){
$del_id=$_GET['del'];

$sql = "DELETE FROM users WHERE id=$del_id";
$conn->query($sql);
$url="https://localhost/crud/list.php";
header('Location: ' . $url, true);
exit();
}

if(isset($_GET['id'])){
$id=$_GET['id'];

$sql="SELECT * FROM users WHERE id=$id";
$result=$conn->query($sql);
$row = $result->fetch_assoc();


?>

<html>
<head>
    <title>Insert Form</title>
</head>
<body>
<form action="insert.php" method="POST">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">
  <label for="fname">Name:</label><br>
  <input type="text" id="name" value="<?php echo $row['name'];?>" name="name"><br>
  <label for="lname">Father name:</label><br>
  <input type="text" id="fname" value="<?php echo $row['fname'];?>" name="fname"><br>
  <label for="lname">Phone No:</label><br>
  <input type="text" id="phoneno" value="<?php echo $row['phoneno'];?>" name="phoneno"><br><br>
  <input type="submit" vaule="Save">
</form> 
</body>
</html>
<?php } ?>