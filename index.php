<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
</head>
<body>
    <div>
        <form action="" method="POST">
        country:-
        <input type="text" name="name"><br><br>

        country_id:-
        <input type="number" name="country_id"><br><br>

        <input type="submit" name="submit" value="submit">

        <button><a href="view.php">view</a></button>
        <form>
    </div>

    <?php
    if(isset($_POST['submit'])){
        $country = $_POST['name'];
        $country_id = $_POST['country_id'];
        $query = "INSERT INTO country(name,country_id) VALUES('$country','$country_id')";
        $data = mysqli_query($con,$query);
        if($data)
        {
            echo "yes!!!";
        }
        else{
            echo "no";
        }
    }

    ?>
</body>
</html>

