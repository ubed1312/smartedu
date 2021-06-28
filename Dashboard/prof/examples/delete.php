
      
<?php
session_start();

include('dbconnection.php');  

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="pfe";
    

    $con=mysqli_connect($servername,$username,$password,$dbname);

    $id = $_POST['id'];

$del_at="1";    
$date_del =date("F j, Y, g:i a");


$query = "UPDATE listeprof SET is_deleted='".$del_at."' , Date_deleted='".$date_del."' WHERE Email='$id'";
$result = mysqli_query($mysqli,$query) or die ( mysqli_error($mysqli));

?>


