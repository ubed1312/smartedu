<?php      
session_start();

    include('dbconnection.php');  

$id=$_REQUEST["id"];
$query = "SELECT * from listeprof where ID='".$id."'"; 
$result = mysqli_query($mysqli, $query) or die ( mysqli_error($mysqli));
$row = mysqli_fetch_assoc($result);

?>