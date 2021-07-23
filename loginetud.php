<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css"/>
     <!-- Site Metas -->
    <title>FSJESAS</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/fsjes.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="stylee.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

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

          echo"<script language=\"javascript\">";
echo"alert('Mot de passe ou login inccorect ! ')";
echo"</script>";


      header("Refresh:1; url=teachers.html");
        }
    }

?>
</html>