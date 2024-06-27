
<!-- connection with the database -->

<?php

$username ="root";
$password = "";
$server = 'localhost';
$db = "crudoperations";
$con = mysqli_connect($server,$username,$password,$db ); //return true or false


if($con)
{
    echo " connected successful";
}
else{
    // echo "not connected";
    die("no connection".mysqli_connect_error());// to get detailed error 
}

?>