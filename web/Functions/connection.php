<?php

function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "alumne";

    $bd = "Energeticas";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;
}
?>