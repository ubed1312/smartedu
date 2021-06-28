<?php      

   
session_start(); 

if(!isset($_SESSION['Email4'])){

$servername="localhost";
$username="root";
$password="";
$dbname="pfe";

$con=mysqli_connect($servername,$username,$password,$dbname);

      //Redirect the instructor to login page if he/she is not logged in.
      echo "
        <script type='text/javascript'>
          window.location.href = '../../../Login_v16/index.php';
        </script>
      ";
    }else{

      


    $servername="localhost";
    $username="root";
    $password="";
    $dbname="pfe";
    
    $con=mysqli_connect($servername,$username,$password,$dbname);
    
    $id = mysqli_real_escape_string($con,$_SESSION['Email5']);



    $sql = "SELECT * FROM listeprof where Email='$id'";
    $result =$con->query($sql);

    $row = mysqli_fetch_array($result);

    }

    
   
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
    /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
    #map {
      height: 600px;
      /* The height is 400 pixels */
      width: 100%;
      /* The width is the width of the web page */
    }

    /* Optional: Makes the sample page fill the window. */
    html,
    body {
      height: 100%;
      margin: 0;
      padding: 0;
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
            <a href="pages/mailbox/mailbox.php" class="dropdown-item">
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
        <div class="user-panel  pb mb-3 ">
          <br>
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">

            <a href="viewetu.php" class="nav-link ">
                <div class="image">
                  <img src="../../dist/<?php echo $row['imagename'];?>" class="img-circle elevation-2" alt="User Image">

                </div>
                <p style="text-transform: uppercase;">
                  <b>
                    &nbsp; <?php echo $row['nom'];?>

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






            <li class="nav-header">EXAMPLES</li>
            <li class="nav-item">
              <a href="calendar.php" class="nav-link">
                <i class="nav-icon fas fa-calendar-alt"></i>
                <p>
                  Calendrier
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
                  <a href="pages/mailbox/mailbox.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Boîte de réception</p>
                  </a>
                </li>


              </ul>
            </li>

            <li class="nav-item has-treeview">
              <a href="pages/mailbox/compose1.php" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Message à l'administrateur


                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="Map.php" class="nav-link active">
                <i class="nav-icon fas fa-map-marker-alt mr-1"></i>
                <p>
                  Localisation


                </p>
              </a>
            </li>





          </ul>
        </nav>

        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Profil</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                <li class="breadcrumb-item active">Profil de l'utilisateur</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="card card-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-info">
                  <h3 class="widget-user-desc">Professeur</h3>

                </div>
                <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="../../dist/<?php echo $row['imagename'];?>"
                    alt="User Avatar">

                </div>


               
                <div class="card-footer"> <br><br>

                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">


                      <a href="Map.php"><button type="" name="" class="btn btn-success" style='align="center"'>Retour a la page précédente                 
                        </button></a>

                  </div>
                  </div>

                  <!-- /.row -->
                </div>
              </div>
              <!-- /.card -->

              <!-- About Me Box -->

              <!-- /.card -->
            </div>
            <!-- /.col -->

            <div class="col-md-9 ">
              <div class="card ">
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">


                   

<div id="map"></div>

                      </div>
                  </div>
                </div>
              </div>

      </section>
    </div>


    <!-- /.content-wrapper -->
    <footer class="main-footer">
    
    <strong>Copyright &copy;<script>document.write(new Date().getFullYear());</script></strong> 
  </footer>

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->







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

  <script>
    // Note: This example requires that you consent to location sharing when
    // prompted by your browser. If you see the error "The Geolocation service
    // failed.", it means you probably did not give permission for the browser to
    // locate you.
    var map, infoWindow;

    function initMap() {

     

      map = new google.maps.Map(document.getElementById('map'), {
        center: {
          lat: 34.05676451501155,
          lng: -6.796412448036951
        },
        zoom: 9
      });
      infoWindow = new google.maps.InfoWindow;

      // Try HTML5 geolocation.
      
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
          var pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };

          var marker = new google.maps.Marker({
            position: pos,
            map: map
          });

          infoWindow.open(marker);
          infoWindow.open(map);
          map.setCenter(pos);


   
    var lat=position.coords.latitude;
    var lng=position.coords.longitude;
    $.ajax({
        url: "insert_map.php",
        dataType: 'json',
        type: 'POST',
        data:{ lat: lat, lng: lng },

        success: function(data)
        {                
          alert('Saved');
        }
   });

        }, function () {
          handleLocationError(true, infoWindow, map.getCenter());
        });
      } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
      }
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
      infoWindow.setPosition(pos);
      infoWindow.setContent(browserHasGeolocation ?
        'Error: The Geolocation service failed.' :
        'Error: Your browser doesn\'t support geolocation.');
      infoWindow.open(map);
    }
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWdGA-ndsHMtR5-cdZrc5SHtfKKBG5Bfg&callback=initMap">
  </script>


</body>

</html>


</body>

</html>
