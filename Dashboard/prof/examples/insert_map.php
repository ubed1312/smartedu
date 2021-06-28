<?php
session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="pfe";


    $con=mysqli_connect($servername,$username,$password,$dbname);

    $id = mysqli_real_escape_string($con,$_SESSION['Email5']);                 

    $lat=$_POST['lat'];
    $lng=$_POST['lng'];


$query = "UPDATE listeprof SET lat='$lat' , lng='$lng' WHERE Email='".$id."'";
$result =$con->query($query);

$result = $con->query($query) or die($con->error);

?> 