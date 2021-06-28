
<?php 

session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="pfe";

$con=mysqli_connect($servername,$username,$password,$dbname);


 $value1 = $_POST['username'];
 $value2 = $_POST['pass'];     


if(isset($_POST['Envoyer']))
 
 {

        $sql = "SELECT * from admin where Email = '$value1' and Password = '$value2'"; 
        $result = $con->query($sql); 


        if($result->num_rows > 0) {

             
                $_SESSION['Email']=$result;

                $_SESSION['Email6']= $value1;

                header("location: test.php");
                

            }     
        else{  
            
             echo '<script language="javascript">';
      echo 'alert("Email Or Password Incorrect")';
      echo '</script>';

      header("Refresh:0; url=admin.php");
           
        } 
    }
           
?>