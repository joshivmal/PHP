<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

include 'connection.php';
$selectquery =" SELECT * from `jobregistration`";

$query = mysqli_query($con,  $selectquery);

if($query){
    $num = mysqli_num_rows($query);
    while($res = mysqli_fetch_array($query))
    {
    ?>
        <p><?php echo $res['name']." ".$res['email']." ".$res['degree'] ?></p>
        <a href="updates.php?id=<?php echo $res['id'];?>">update</a>
<?php
    }
}
else
{
    echo "error".mysqli_error($con);
}
?>



</body>
</html>



