<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="youtube";

$con=mysqli_connect($hostname,$username,$password,$dbname);

if($con)
{
    echo "";
}
else{
    echo "fail";
}

?>               