<?php

$cookie_name = "Vimal" ;
$cookieValue = "456" ;

setcookie($cookie_name, $cookieValue, time()+6,"/") ;

?>

<html>
<body>
    

<?php

if( isset($_COOKIE[$cookie_name]) ){

    // setcookie($cookie_name, "user2",time()+5,"/") ;
    echo "cookie ".$cookie_name."  value is ".$_COOKIE[$cookie_name] ;
}
else{
    echo "cookie value is not set" ;
}

?>

</body>
</html>
