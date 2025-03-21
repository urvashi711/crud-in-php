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
    
    <?php
    if(isset($_POST['update'])){
        $name=$_POST['name'];
        $country_id=$_POST['country_id'];
        $update="UPDATE country SET name='$name' ,country_id='$country_id' WHERE id='$id'";
        $date=mysqli_query($con,$update);
        if($data){
            ?>
            <script type="text/javascript">
                alert("Data Updated Successfully");
                window.open("http://localhost/crud/view.php","_self");
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
}
?>



    