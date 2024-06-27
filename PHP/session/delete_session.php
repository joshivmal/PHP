<?php
session_start();
// session_destroy();    // to destroy the full session at once 


// to destroy the variable in a session
unset($_SESSION['username']);

?>