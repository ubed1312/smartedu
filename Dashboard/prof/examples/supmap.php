<?php
session_start();




$servername="localhost";
$username="root";
$password="";
$dbname="pfe";

$con=mysqli_connect($servername,$username,$password,$dbname);
$id = mysqli_real_escape_string($con,$_SESSION['Email5']);



   $sql0 = "UPDATE listeprof SET lat=NULL , lng=NULL WHERE Email='$id' ";
   $result0 =$con->query($sql0);
  

  
?>