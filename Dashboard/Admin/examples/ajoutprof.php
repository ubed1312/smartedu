<?php      
   
session_start(); 

if(!isset($_SESSION['Email'])){

$servername="localhost";
$username="root";
$password="";
$dbname="siteweb";

$con=mysqli_connect($servername,$username,$password,$dbname);

      //Redirect the instructor to login page if he/she is not logged in.
      echo "
        <script type='text/javascript'>
          window.location.href = 'admin.php';
        </script>
      ";
    }

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="siteweb";
    
    $con=mysqli_connect($servername,$username,$password,$dbname);

    $value1 = '1';

    $sql = "SELECT * FROM admin where Code_Adm='$value1'"; 
    $result =$con->query($sql);
    
    $row = mysqli_fetch_assoc($result);
   
  ?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Super Prof
  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link href="../../dist/img/cap.png" rel="shortcut icon" />

  <!-- fullCalendar -->
  <link rel="stylesheet" href="../../plugins/fullcalendar/main.min.css">
  <link rel="stylesheet" href="../../plugins/fullcalendar-daygrid/main.min.css">
  <link rel="stylesheet" href="../../plugins/fullcalendar-timegrid/main.min.css">
  <link rel="stylesheet" href="../../plugins/fullcalendar-bootstrap/main.min.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">


</head>
<style>
  .zoom:hover {
    transform: scale(2);
    /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
  }

</style>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>


      </ul>



      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>

          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

            <div class="dropdown-divider"></div>
            <a href="../../pages/mailbox/mailbox.php" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i>Messages

            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i>Profil

            </a>



        </li>


        <li class="nav-item ml-md-auto"><a href="logout.php" class="nav-link"><i
              class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>

      </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->

      <!-- Sidebar -->
      <div class="sidebar ">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel pb mb-3">
          <br>
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">

              <a href="edit_adm.php" class="nav-link active">
                <div class="image">
                  <img src="../../dist/<?php echo $row['imagename'];?>" class="img-circle elevation-2" alt="User Image">
                </div>
                <p style="text-transform: uppercase;">
                  <b>
                    &nbsp; <?php echo $row['Nom'];?>
                  </b>
                </p>
              </a>


            </li>
          </ul>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

           
            <li class="nav-item">
              <a href="tables.php" class="nav-link ">
                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                <p>
                  Liste des professeurs

                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="students.php" class="nav-link">
                <i class="nav-icon fas fa-user-graduate"></i>
                <p>
                  Liste des Etudiants

                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  Mail
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../pages/mailbox/mailbox.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Boîte de réception</p>
                  </a>
                </li>

              </ul>
            </li>

          </ul>
        </nav>

        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>











    


        <!-- Content Wrapper. Contains page content -->
        

        <?php
include_once("dbconnection.php");
if(isset($_POST['Ajouter']))  
{


$nom = $_POST['nom'];
$imagename = $_POST['imagename'];
$ville = $_POST['ville'];
$matiere = $_POST['matiere'];
$categorie = $_POST['categorie'];
$email = $_POST['email'];
$password = $_POST['password'];
$Education = $_POST['Education'];
$skills = $_POST['skills'];


  

//   $sql3 = "SELECT * FROM client where  cin='$cin'  ";
//   $result3 = $con->query($sql3);

//   $sql2 = "SELECT * FROM produit where  cin='$cin'";
//   $result2 = $con->query($sql2);

// if ($result3->num_rows > 0)
// {
   
//    echo  'Données deja exists';
 
// }
// else{

//     echo  '


//     <script src="plugins/jquery/jquery.min.js"></script>
//     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
//            <script type="text/javascript">   
    
//                     $(document).ready(function(){
    
                     
                      
//                       swal({
//                         icon: "success",
//                         title: "Bien .",
//                         text: "Profil Ajoutee",
//                       })
//                     });
//                   </script>
//     ';

$sql = "INSERT INTO ajoutprof( nom, imagename, ville, matiere, categorie,email,password,Education,skills) VALUES('$nom','$imagename','$ville','$matiere','$categorie','$email','$password','$Education','$skills')";
$result = $con->query($sql);


}


// if(isset($_POST['delete']))  
// {
// $id = $_POST['id'];
// $sql = ' UPDATE client SET is_deleted="1" WHERE id='.$id;
//  $con->query($sql);

// header("Location: clienttable.php");
// }
// if(isset($_POST['update']))  
// {


//   $id = $_POST['id'];
//   $cin = $_POST['cin'];
//   $prenom = $_POST['prenom'];
//   $nom = $_POST['nom'];
//   $tele = $_POST['tele'];
//   $adresse = $_POST['adresse'];
  
// $sql =" UPDATE client SET cin='".$cin."',prenom='".$prenom."',nom='".$nom."',tele='".$tele."',adresse='".$adresse."' WHERE ID=".$id;
//  $con->query($sql);

// header("Location: clienttable.php");

// }
    ?>


<section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Form client</h3>
      <!-- BASIC FORM ELELEMNTS  -->
      <div class="row mt">
        <div class="col-lg-12">
          <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Form client</h4>
            <form class="form-horizontal style-form" method="post" action="actionClient.php">
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">cin</label>
                <div class="col-sm-10">
                  <input type="text"  name="cin"class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">prenom</label>
                <div class="col-sm-10">
                  <input type="text" name="prenom" class="form-control">
                </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">nom</label>
                  <div class="col-sm-10">
                    <input type="text" name="nom" class="form-control">
                  </div>
                </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">GSM</label>
                <div class="col-sm-10">
                  <input type="text" name="tele"class="form-control round-form">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">adresse</label>
                <div class="col-sm-10">
                
                <textarea class="form-control"name="adresse" aria-label="With textarea"></textarea>
                
                </div>
              </div>
              
              <div class="form-group">
                
                <div class="col-sm-10">
                  <input type="submit" name="Ajouter"class="btn btn-default"value="Ajouter">
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- col-lg-12-->
      </div>
      <!-- /row -->
      
    </section></section>
        <!-- /.content-wrapper -->




        <!-- /.content-wrapper -->
        <footer class="main-footer">

          <strong>Copyright &copy;<script>
              document.write(new Date().getFullYear());

            </script></strong>
        </footer>
     








      <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
      <!-- jQuery UI -->
      <script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
      <!-- overlayScrollbars -->
      <script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
      <!-- Page specific script -->

      <script src="../../plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap -->
      <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- overlayScrollbars -->
      <script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
      <!-- jQuery UI -->
      <script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
      <!-- AdminLTE App -->
      <script src="../../dist/js/adminlte.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="../../dist/js/demo.js"></script>



    </body>

</html>
