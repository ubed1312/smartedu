<?php

session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="pfe";


    $con=mysqli_connect($servername,$username,$password,$dbname);

    $id = mysqli_real_escape_string($con,$_SESSION['Email2']);    
    
    
    $sql = "SELECT * FROM listeetud where Email='$id'";
    $result =$con->query($sql);

    $row = mysqli_fetch_array($result);

    $id0=$row['CodeEt'];



   $sql0 = "UPDATE listeetud SET imagename=NULL where CodeEt='$id0' ";
   $result0 =$con->query($sql0);


?>