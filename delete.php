<?php
include "connection.php";
$id=$_GET['id'];
$query="DELETE FROM country WHERE id='$id'";
$data=mysqli_query($con,$query);
if($data)
{
    ?>
<script type="text/javascript">
    alert("Data Delete successfully");
</script>
    <?php
}

else
{
   ?>
   <script type="text/javascript">
      alert("please try again");
   </script>
   <?php
}


