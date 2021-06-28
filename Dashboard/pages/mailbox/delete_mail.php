<?php
session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="pfe";


    $con=mysqli_connect($servername,$username,$password,$dbname);

    $id = mysqli_real_escape_string($con,$_SESSION['Email6']);                 

    $msg=$_REQUEST["msg"];

$del_at="1";    
$date_del =date("F j, Y, g:i a");


$query = "UPDATE contact_etu SET is_deleted='".$del_at."' ,Date_deleted='".$date_del."' WHERE Email='".$id."' and Message='$msg' ";
$result =$con->query($query);

$result = $con->query($query) or die($con->error);

header("Location: mailbox.php"); 
?>