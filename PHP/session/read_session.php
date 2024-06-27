<?php
session_start();
if(isset($_SESSION['username'])){
echo $_SESSION['username']. "<br>";  
echo $_SESSION['age'];
}
else{
    echo "no username is set";
}

?>