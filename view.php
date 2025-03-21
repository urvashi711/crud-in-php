<?php
include "connection.php";
?>
<a href="index.php">Home</a>
<table border="1px solid" cellpadding="10" cellspacing="0px">
<tr>
    <th>name</th>
    <th>country_id</th>
    <th colspan="2">Actions</th>
</tr>


<?php
$query = "SELECT * FROM country";
$data = mysqli_query($con,$query);
$result = mysqli_num_rows($data);
if($result)
{
   while($row = mysqli_fetch_array($data)){
      ?>
       <tr>
          <td><?php  echo $row['name']; ?></td>
          <td><?php  echo $row['country_id']; ?></td>
          <td><a href="update.php?id=<?php  echo $row['id'];?>">Edit</a></td>
          <td><a onclick="return corfim('Are you sure, you want to delete?')" href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
       </tr>
      <?php
   }
}
else
{
    ?>
    <tr>
      <th>no record foud!!!</th>
    </tr>
    <?php
}

?>
</table>
