<?php

include 'connection.php';

$idd = $_GET['id'];
$deletequery = "DELETE FROM `jobregistration` WHERE `id` = $idd ";

$showquery = mysqli_query($con,$deletequery);

header('location:display.php');

?>