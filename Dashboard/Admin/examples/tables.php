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
      $dbname="pfe";
      
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
    Super Prof
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
              <div class="table-responsive">


                <form name="f1" action="" onsubmit="return validation()" method="POST">



                  <table class="table table-bordered table-striped" id="example1">
                    <thead class=" text-primary">

                      <tr>
                      <th>
                          Nom
                        </th>
                         <th>
                        <center> Image</center>
                        </th>
                        <th>
                          Ville
                        </th>
                        <th>
                          Matiere
                        </th>

                        <th>
                          Email
                        </th>
                        <th>
                          Actions
                        </th>
                      </tr>
                    </thead>



                    <tbody>


                      <?php


                        
$del_at="0"; 
$requete = "SELECT * FROM listeprof";
// envoi de la requête
global $resultat;
$resultat = $mysqli->query($requete) or die ('Erreur '.$requete.' '.$mysqli->error);

// intialisation de la variable $news
$news = '';

// tant qu'il y a un enregistrement, les instructions dans la boucle s'exécutent
while ($ligne = $resultat->fetch_assoc()) 
{ ?>
                      <tr>

                        <td>
                          <?php echo $ligne["nom"]; ?>
                        </td>
                        <td>
                       <center>
                          <img src="../../dist/<?php echo $ligne['imagename'];?>" class="zoom profile-user-img img-fluid img-circle" >
                      </center>
                        </td>
                        
                        <td>
                          <?php echo $ligne["ville"]; ?>

                        </td>
                        <td>
                          <?php echo $ligne["matiere"]; ?>

                        </td>

                        <td>
                          <?php echo $ligne["email"]; ?>

                        </td>

                        <?php 

                        if ($ligne['Date_deleted'] == NULL && $ligne['is_deleted'] =='0')
{

?>
                        <td class="project-actions text-left">
                          <a class="btn btn-primary btn-sm" href="view.php?id=<?php echo $ligne["ID"]; ?>">
                            <i class="fas fa-folder">
                            </i>
                            Afficher
                          </a>


                          <a class="btn btn-info btn-sm" href="edit.php?id=<?php echo $ligne["ID"]; ?>">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Éditer
                          </a>

                          <a class="delete btn btn-danger btn-sm" href="delete.php?id=<?php echo $ligne["ID"]; ?>">
                            <i class="fas fa-trash">
                            </i>
                            Supprimer
                          </a>
                        </td>
   <?php 
}

else
{

?>
                             <td class="project-actions text-left">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <a class="btn btn-success btn-sm" href="ajout.php?id=<?php echo $ligne["ID"]; ?>">
                         
                            <i class="fas fa-user-plus">
                            </i>
                            &nbsp; Ajouter une autre fois
                          </a>
                        </td>

<?php 
}

?>

                        <?php } ?>

                      </tr>

                    </tbody>

                  </table>


                </form>
              </div>
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
        if (!confirm('êtes-vous sûr de supprimer ?')) {
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




