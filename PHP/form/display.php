<?php

include 'connection.php' ;
$sq = " select * from `data` ";

$query = mysqli_query($con, $sq) ;

if( $query){
    $num = mysqli_num_rows($query) ;

    while($res = mysqli_fetch_array($query)){

        echo $res['naame']."<br>" ;
    }
}
else{
    echo "error".mysqli_error($con) ;
}

?>