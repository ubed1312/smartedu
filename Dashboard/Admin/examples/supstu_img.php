<?php

session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="siteweb";


    $con=mysqli_connect($servername,$username,$password,$dbname);

    
    
    $sql = "SELECT * FROM listeetud where Email='$id'";
    $result =$con->query($sql);

    $row = mysqli_fetch_array($result);

    $id0=$_POST['id0'];



   $sql0 = "UPDATE listeetud SET imagename=NULL where CodeEt='$id0' ";
   $result0 =$con->query($sql0);


?>