
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    FSJES AS
  </title>
  <link href="../../dist/img/cap.png" rel="shortcut icon" />
  </head>
  <body>


<?php
session_start();

include('dbconnection.php');


// $del_at="1";
$id=$_REQUEST['id'];
// $date_del =date("F j, Y, g:i a");


$query = "UPDATE evenement SET event='masque'  WHERE ID='".$id."' ";
$result = mysqli_query($mysqli,$query) or die ( mysqli_error($mysqli));


echo  '


  <script src="../../plugins/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script type="text/javascript">

                  $(document).ready(function(){



                    swal({
                      icon: "success",
                      title: "Bien .",
                      text: "Evenement Masquer",
                    })
                  });
                </script>
  ';


header( "refresh:2;url=Evenements.php" );
?>

</body>
</html>
