<?php


session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="siteweb";

$con=mysqli_connect($servername,$username,$password,$dbname);

 $value1 = $_POST['email'];
 $value2 = $_POST['psd'];     

if(isset($_POST['Envoyer']))

 {

        $sql = "SELECT * from listeprof where email='$value1' and password = '$value2'";
        $result = $con->query($sql);




        if($result->num_rows > 0) {   // Kbar mn 0 => 1.2.3... kate3ni kayn fbase donne 
                                      // 0  makinch tem


          header("location: ensei.html");

            }

        else{

                      echo  'error';

      header("Refresh:2; url=pricing.html");
        }
    }

?>
