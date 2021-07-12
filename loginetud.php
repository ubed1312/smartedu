<?php


session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="siteweb";

$con=mysqli_connect($servername,$username,$password,$dbname);

 $value1 = $_POST['Email'];
 $value2 = $_POST['cne'];     

if(isset($_POST['Envoyer1']))

 {

        $sql = "SELECT * from listeetud where Email='$value1' and cne = '$value2'";
        $result = $con->query($sql);




        if($result->num_rows > 0) {   // Kbar mn 0 => 1.2.3... kate3ni kayn fbase donne 
                                      // 0  makinch tem


          header("location: pricing.html");

            }

        else{

                      echo  'error';

      header("Refresh:2; url=teachers.html");
        }
    }

?>
