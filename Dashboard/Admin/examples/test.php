<?php
  include("./connection/DB.php");
  ?>

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
  Administration
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

  <link href="../../dist/img/fsjes.png" rel="shortcut icon" />

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
  .round{
           width:21px;
          height:21px;
          border-radius:50%;
          position:relative;
          background:red;
          display:inline-block;
          padding:-7rem 1rem !important;
          margin:0.3rem 2rem !important;
          left:-19px;
          top:3px;

        }
        .round > span {
          color:white;
          display:block;
          text-align:center;
          font-size:1rem !important;
          padding:0 !important;
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
                  Contact
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

            <?php
       $find_notifications = "Select * from note where statut='en cours'";
       $result = mysqli_query($connection,$find_notifications);
       $count_active = '';
       $notifications_data = array();
       $deactive_notifications_dump = array();
        while($rows = mysqli_fetch_assoc($result)){
                $count_active = mysqli_num_rows($result);
                $notifications_data[] = array(
                                 "id" => $rows['id'],
                            "module"=>$rows['module'],
                            "nom"=>$rows['nom']
                );
        }
        //only five specific posts
        $deactive_notifications = "Select * from note";
        $result = mysqli_query($connection,$deactive_notifications);
        while($rows = mysqli_fetch_assoc($result)){
          $deactive_notifications_dump[] = array(
                       "id" => $rows['id'],
                            "module"=>$rows['module'],
                            "nom"=>$rows['nom']
          );
        }

     ?>
              <li class="nav-item">
              <a href="notification.php" class="nav-link">
            &nbsp; <i class="fa fa-bell"  style="font-size: 18;" id="over" data-value ="<?php echo $count_active;?>" style="z-index:-99 !important;font-size:10px;color:white;margin:0.6rem 0.1rem !important;"></i>


                <p>
              &nbsp; Notifications

                </p><?php if(!empty($count_active)){?>
                    <div class="round"  data-value ="<?php echo $count_active;?>"><span><?php echo $count_active; ?></span></div>
                    <?php }?>
              </a>
            </li>
<!------------ Evenement ------------>
<li class="nav-item ">
<a href="Evenements.php" class="nav-link ">
              <i class="far fa-calendar-alt"></i>
                <p>
                Evénements

                </p>
              </a>
            </li>
<!-- . -->

          </ul>
        </nav>

        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>


    
    


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-image: url('3.jpg');background-repeat: no-repeat;">


          <!-- Main content -->
          <section class="content" >
            <div class="container-fluid" >






              <div class="row">
                <div class="col-md-4">

                </div>
                <!-- /.col -->
                <div class="col-md-4" style="margin-top: 120px;">
                  <!-- Widget: user widget style 1 -->
                  <div class="card card-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-info">
                      <h2 class="widget-user-username">Bonjour <b><?php echo $row['Nom'];?></b></h2>
                      <h5 class="widget-user-desc">Admin</h5>
                    </div>
                    <div class="widget-user-image">
                    <img class="zoom img-circle elevation-2" src="../../dist/<?php echo $row['imagename'];?>" alt="User Avatar">
                            </div>
                        
                    <div class="card-footer">
                   <br><br>  <div class="row"> <hr>
                        <div class="col-sm-4 border-right"> <hr>
                          <div class="description-block">
                            <h5 class="description-header">Partie</h5>
                            <a href="tables.php"> <span class="description-text">Prof</span></a>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 border-right"> <hr>
                          <div class="description-block">
                            <h5 class="description-header">Partie</h5>
                            <a href="students.php"> <span class="description-text">Etudiants</span></a>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4"> <hr>
                          <div class="description-block">
                            <h5 class="description-header">Partie</h5>
                            <a href="../../pages/mailbox/mailbox.php"><span class="description-text">Mail</span></a>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                  </div>
                  <!-- /.widget-user -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">


                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

            </div><!-- /.container-fluid -->
          </section>
          <!-- /.content -->


          </a>
        </div>
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
