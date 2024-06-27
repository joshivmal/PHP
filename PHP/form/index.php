
<?php


if( isset($_POST['name']))
{

    // set connection variable

    $server = "localhost" ;
    $username = "root" ;
    $password = "" ;

    // create a database connection
    $con = mysqli_connect($server, $username, $password) ;


    // check for successfull connection
    if(!$con){

        die("connection to this database failed due to".mysqli_connect_error());
    }
    // echo "successfull connect" ;


    // $name = $_POST['name'];
    // $dob = $_POST['dob'];
    // $address = $_POST['address'];
    // $gender = $_POST['gender'];
    // $email = $_POST['email'];
    // $phone = $_POST['phone'];

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $dob = isset($_POST['dob']) ? $_POST['dob'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';


    $sql = "INSERT INTO `trip`.`data` (`name`, `dob`, `address`, `gender`, `email`, `phone`, `date`) VALUES 
    ( '$name', '$dob', '$address', '$gender', '$email', '$phone', current_timestamp());" ;

    // echo $sql ;

    if( $con->query($sql) == true ){

        echo " successfully inserted" ;
    }

    else{

        echo "Error.$sql<br>$con->error" ;
    }
    $con->close() ;

}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img  class="bg" src="bg2.jpg" alt="">

    <div id="survey">

        <h2> Survey by Indian Government</h2>

        <form action= "index.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required placeholder="Enter your name">
            <br>
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" id="dob">
            <br>
            <label for="address">Address</label>
            <input type="text" name="address" id="address">
            <br>
            <label for="gender">Gender</label>
            <br>
            <label for="male">Male</label>
            <input type="radio" name="gender" id="male" value="male">
            <label for="female">Female</label>
            <input type="radio" name="gender" id="female" value="female">
            <br>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <br>
            <label for="phone">PhoneNo</label>
            <input type="number" name="phone" id="phone">
            <br>
            <button class="btn" type="submit">Submit</button>
            <button class="btn" type="reset">Reset</button>
        </form>
    </div>
    
</body>
</html>
