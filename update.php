<?php
include "connection.php";
 $id=$_GET['id'];
 $select = "SELECT * FROM country WHERE id='$id'";
 $data = mysqli_query($con,$select);
 $row = mysqli_fetch_array($data);

?>
    <div>
        <form action="" method="POST">
        country:-
        <input value="<?php echo $row['name']?>" type="text" name="name"><br><br>

        country_id:-
        <input value="<?php echo $row['country_id']?>" type="number" name="country_id"><br><br>

        <input type="submit" name="update" value="update">

        <button><a href="view.php">Back</a></button>
        <form>
    </div>


    