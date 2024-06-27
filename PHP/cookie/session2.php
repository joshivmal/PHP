<?php

session_start() ;

$_SESSION['color'] = "green" ;

// remove all session variables
session_unset();

// destroy the session
session_destroy();

// echo "session color is ".$_SESSION['color']."<br>" ;
// echo "session data is ".$_SESSION['data'] ;

?>