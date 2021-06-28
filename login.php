<?php


$servername="localhost";
$username="root";
$password="";
$dbname="siteweb";

$con=mysqli_connect($servername,$username,$password,$dbname);


 $value1 = $_POST['identifiant'];
 $value2 = $_POST['psd'];     


 $sql="select * from listeprof where identifiant = '$value1' and psd = '$value2'";
 $result= $con->query($sql);

 if($result->num_rows > 0){

    header ("location : ensei.html");

 }

else {
    echo 'error';
}





?>