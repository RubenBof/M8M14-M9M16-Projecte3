<?php

include("connection.php");
$con = connection();

$id=$_GET["id"];

$sql="DELETE FROM Energetica WHERE ID='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../registres.php");
}else{

}

?>