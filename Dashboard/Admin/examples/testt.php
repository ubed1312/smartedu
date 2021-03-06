<?php 

include('dbconnection.php');

session_start(); 

if(!isset($_SESSION['Email'])){



      //Redirect the instructor to login page if he/she is not logged in.
      echo "
        <script type='text/javascript'>
          window.location.href ='admin.php';
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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
  Administration
  </title> <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link href="../../dist/img/cap.png" rel="shortcut icon" />
</head>
<style>

.zoom:hover {
  transform: scale(2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
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
            <a href="edit_adm.php" class="dropdown-item">
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
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel pb mb-3">
          <br>
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">


              <a href="edit_adm.php" class="nav-link">
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
              <a href="#" class="nav-link active">
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
                Contact
               <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../pages/mailbox/mailbox.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Bo??te de r??ception</p>
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

    <div class="content-wrapper">


      <section class="content">


        <!-- Default box -->
        <div class="card card-info">
          <div class="card-header">
          <h3 class="card-title">Liste des professeurs</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="card-body">



            <section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Form Professeur</h3><br><br><br>
      <!-- BASIC FORM ELELEMNTS  -->
      <div class="row mt">
        <div class="col-lg-12">
          <div class="form-panel">
            <!-- <h4 class="mb"><i class="fa fa-angle-right"></i> Form client</h4> -->
            <form class="form-horizontal style-form" method="post">
              
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Nom & Pr??nom</label>
                <div class="col-sm-10">
                  <input type="text" name="nom" class="form-control" placeholder="" required>
                </div>
              </div>
              
                <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">cin</label>
                <div class="col-sm-10">
                  <input type="text"  name="cin" class="form-control" placeholder="" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">GSM</label>
                <div class="col-sm-10">
                  <input type="text" name="tel" class="form-control round-form" placeholder="" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Ville</label>
                <div class="col-sm-10">
                
                <textarea class="form-control"name="ville" aria-label="With textarea" placeholder="" required></textarea>
                
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Matiere</label>
                <div class="col-sm-10">
                  <input type="text" name="matiere" class="form-control round-form" placeholder="" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Comp??tence</label>
                <div class="col-sm-10">
                  <input type="text" name="skills" class="form-control round-form" placeholder="" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" name="email" class="form-control round-form" placeholder="" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <input type="text" name="password"class="form-control round-form" placeholder="" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Telecharger l'image </label>
                <input type="file" name="file" required/>
                        <br><br>
                     <!-- <center>
                        <button type="submit" name="imagename" class="btn btn-info" style='align="center"'>Saisir l'image
                        </button></center> -->
              </div>
              <br><br>
              <div class="form-group">
                
                <div class="col-sm-10">
                  <input type="submit" name="Ajouter"class="btn btn-success"value="Ajouter">
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- col-lg-12-->
      </div>
      <!-- /row -->
      
    </section></section>

    <?php
include_once("dbconnection.php");
if(isset($_POST['Ajouter']))  
{


@$nom = $_POST['nom'];
@$cin = $_POST['cin'];
@$tel = $_POST['tel'];
@$ville = $_POST['ville'];
@$matiere = $_POST['matiere'];
@$skills = $_POST['skills'];
@$email = $_POST['email'];
@$password = $_POST['password'];

     @$file = rand(1000,10000)."-".$_FILES["file"]["name"];
     @$tname = $_FILES["files"]["tmp_name"];
     @$uploads_dir = '/images';

     move_uploaded_file($tname,$uploads_dir.'/'.$file);


// $categorie = $_POST['categorie'];

// $Education = $_POST['Education'];
// $skills = $_POST['skills'];

$sql = "INSERT INTO ajoutprof( nom, cin, tel, ville, matiere, skills, email, password, file) VALUES('$nom','$cin','$tel','$ville','$matiere','$skills','$email','$password','$file')";
$result = $con->query($sql);
header("location:tables.php");
}?>


            </div>
          </div>
        </div>

      </section>
    </div>




    
    <footer class="main-footer">
    
    <strong>Copyright &copy;<script>document.write(new Date().getFullYear());</script></strong> 
  </footer>
  </div>




  </div>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script language="JavaScript" type="text/javascript">
    $(document).ready(function () {
      $("a.delete").click(function (e) {
        if (!confirm('??tes-vous s??r de supprimer ?')) {
          e.preventDefault();
          return false;
        }
        return true;
      });
    });

  </script>

  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="../../plugins/datatables/jquery.dataTables.js"></script>
  <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- page script -->




  <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });

  </script>
</body>

</html>




