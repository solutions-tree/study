<?php
require 'db.php';

$sql="SELECT * FROM users";

$result=$conn->query($sql);

if ($result->num_rows > 0) { ?>
    <table>
        <tr>
    <th>Name</th>
    <th>F Name</th>
    <th>Mobile</th>
    <th>Action</th>
</tr>
    <?php while($row = $result->fetch_assoc()) { ?>
        
        <tr>
          <th><?php echo $row['name'];?></th>
          <th><?php echo $row['fname'];?></th>
          <th><?php echo $row['phoneno'];?></th>
          <th><a href="edit.php?id=<?php echo $row['id'];?>">Edit</a> || <a href="edit.php?del=<?php echo $row['id'];?>">Delete</a></th>
        </tr>
      
   <?php  } ?>
    </table> 
<?php 
}

