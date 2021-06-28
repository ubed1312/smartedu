<?php
session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="pfe";


    $con=mysqli_connect($servername,$username,$password,$dbname);

    $id = mysqli_real_escape_string($con,$_SESSION['Email5']);                 


$del_at="0";    
$date_del =NULL;


$query = "UPDATE contact_adm SET is_deleted='".$del_at."' ,Date_deleted='".$date_del."' WHERE Email='".$id."' ";
$result =$con->query($query);

$result = $con->query($query) or die($con->error);


$query1 = "UPDATE contact_Etu SET is_deleted='".$del_at."' ,Date_deleted='".$date_del."' WHERE Email='".$id."' ";
$result1 =$con->query($query1);

$result1 = $con->query($query1) or die($con->error);

header("Location: mailbox.php"); 
?>