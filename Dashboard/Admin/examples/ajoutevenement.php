
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
  Administration
  </title>
  <link href="../../dist/img/fsjes.png" rel="shortcut icon" /> 
  </head>
  <body>
      
  
<?php
session_start();

include('dbconnection.php');  


$del_at="0";    
$id=$_REQUEST['id'];
$date_del =NULL;


$query = "UPDATE evenement SET is_deleted='".$del_at."' ,Date_deleted='".$date_del."' WHERE ID='".$id."' ";
$result = mysqli_query($mysqli,$query) or die ( mysqli_error($mysqli));


echo  '


  <script src="../../plugins/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script type="text/javascript">   
  
                  $(document).ready(function(){
  
                   
                    
                    swal({
                      icon: "success",
                      title: "Bien .",
                      text: "Evenement Ajouté",
                    })
                  });
                </script>
  ';


header( "refresh:2;url=Evenements.php" );
?>

</body>
</html>
