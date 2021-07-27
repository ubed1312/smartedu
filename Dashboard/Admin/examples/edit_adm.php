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

  <link href="../../dist/img/fsjes.png" rel="shortcut icon"/>

   <!-- fullCalendar -->
   <link rel="stylesheet" href="../../plugins/fullcalendar/main.min.css">
  <link rel="stylesheet" href="../../plugins/fullcalendar-daygrid/main.min.css">
  <link rel="stylesheet" href="../../plugins/fullcalendar-timegrid/main.min.css">
  <link rel="stylesheet" href="../../plugins/fullcalendar-bootstrap/main.min.css">

      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
     

</head>
<style>
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
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i>Profil
      
          </a>
         
         
         
      </li>
      
                
                <li class="nav-item ml-md-auto"><a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
              
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

              <a href="#" class="nav-link active">
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
              &nbsp;&nbsp; Notifications

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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
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
          <?php

if(isset($_POST['Modifier2']))  
{
$servername="localhost";
$username="root";
$password="";
$dbname="siteweb";



//connexion au serveur
$con=mysqli_connect($servername,$username,$password,$dbname);
$file = $_FILES['file'];


$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];


    $fileExt = explode( '.', $fileName);
     $fileActualExt = strtolower(end($fileExt));


$allowed = array('png', 'jpg', 'jpeg');

//Tu fais les vérifications nécéssaires
if(in_array($fileActualExt, $allowed))
//Si l'extension n'est pas dans le tableau
{
if ($fileError === 0) {
 
 if ($fileSize < 5000000) {


   $fileNameNew = uniqid('', true).".".$fileActualExt;
   $fileDestination = '../../dist/img/Adm/'.$fileNameNew;
   move_uploaded_file($fileTmpName , $fileDestination);



      
       $fileDestination1 = 'img/Adm/'.$fileNameNew;


      $sql1 = "UPDATE admin SET imagename='$fileDestination1' where Code_Adm='2'";
      $result1 =$con->query($sql1);

    echo  '


<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
       <script type="text/javascript">   

                $(document).ready(function(){

                 
                  
                  swal({
                    icon: "success",
                    title: "Bien .",
                    text: "Image Modifiée",
                  })
                });
              </script>
';

    echo("<meta http-equiv='refresh' content='2'>");

 } else {
 
  echo  '


  <script src="../../plugins/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script type="text/javascript">   
  
                  $(document).ready(function(){
  
                   
                    
                    swal({
                      icon: "erreur",
                      title: "Ouups ..",
                      text: "Grande Taille Image",
                    })
                  });
                </script>
  ';

 }
} else {


  echo  '


  <script src="../../plugins/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script type="text/javascript">   
  
                  $(document).ready(function(){
  
                   
                    
                    swal({
                      icon: "erreur",
                      title: "Ouups ..",
                      text: "Erreur de l upload Image",
                    })
                  });
                </script>
  ';
}

} else {


  echo  '


  <script src="../../plugins/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script type="text/javascript">   
  
                  $(document).ready(function(){
  
                   
                    
                    swal({
                      icon: "error",
                      title: "Ouups ..",
                      text: "Vous ne pouvez pas uploader ce type",
                    })
                  });
                </script>
  ';
}

}

?>
            <!-- Profile Image -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <h3 class="widget-user-username"> <?php echo $row['Nom'];?></h3>
                <h5 class="widget-user-desc">Admin</h5>
              </div>
              <div class="widget-user-image">
                <img class="zoom img-circle elevation-2" src="../../dist/<?php echo $row['imagename'];?>" alt="User Avatar">
              </div>
              <div class="card-footer">
                  <br>
                <div class="row">
 
                </div>
                <form action='' method='post' enctype='multipart/form-data' onsubmit="return confirm('êtes-vous sûr de modifier ?');">
                <br> <input type="file" name="file" required/>
                        <br><br>
                     <center>
                        <button type="submit" name="Modifier2" class="btn btn-success" style='align="center"'>Modifier Image
                        </button></center>
                        </br></br>
                    

                  </form>
                <!-- /.row -->
              </div>

              
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            
            <!-- /.card -->
          </div>
          <!-- /.col -->

       <div class="col-md-9 " >
            <div class="card ">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">

                <?php
if(isset($_POST['Modifier']))  
 {

  $servername="localhost";
  $username="root";
  $password="";
  $dbname="siteweb";
  
  $con=mysqli_connect($servername,$username,$password,$dbname);



$value1 = $_POST['Nom'];
$value2 = $_POST['Email'];
$value3 = $_POST['Password'];

$sql2="SELECT * From admin where Nom='$value1' and Email='$value2' and Password='$value3' and Code_Adm='2'";
$result2 =$con->query($sql2);
    

if ($result2->num_rows > 0 ) {


  echo  '


  <script src="../../plugins/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script type="text/javascript">   
  
                  $(document).ready(function(){
  
                   
                    
                    swal({
                      icon: "error",
                      title: "Ouups ..",
                      text: "Données deja exists",
                    })
                  });
                </script>
  ';
}

else{

  
  $sql1 = "UPDATE admin SET Nom='$value1', Email='$value2' , Password='$value3' where Code_Adm='2 '";
  $result1 =$con->query($sql1);


  echo  '


  <script src="../../plugins/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script type="text/javascript">   
  
                  $(document).ready(function(){
  
                   
                    
                    swal({
                      icon: "success",
                      title: "Bien .",
                      text: "Profile modifié",
                    })
                  });
                </script>
  ';

  echo("<meta http-equiv='refresh' content='2'>");


}


}


?> 

<form method="POST" action="" onsubmit="return confirm('êtes-vous sûr de modifier ?');" id="quickForm">

                  <div class="active tab-pane " >
                    <form class="form-horizontal">
                    <br><br>
                      
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-6">
                        <input class="form-control" type="text" name="Email" placeholder="Email" value="<?php echo $row['Email'];?>" readonly>
                        </div>
                      </div>
                      <br>

                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-6">
                        <input class="form-control" type="text" title="Nom Invalid" pattern="[A-Za-z ]{2,32}" name="Nom" placeholder="Nom" value="<?php echo $row['Nom'];?>" required>    
                        </div>
                      </div>
                      <br>

                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-6">
                        <input class="form-control" type="text" title="Mot de Passe Invalid" name="Password" placeholder="Password" value="<?php echo $row['Password'];?>" required>
                        </div>
                      </div>
                     
                      <br>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" name="Modifier" class="btn btn-primary">Modifier</button></br></br>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>

            </div>

            <!-- /.nav-tabs-custom -->

          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
    <strong>Copyright &copy;<script>document.write(new Date().getFullYear());</script></strong> 
  </footer>
  </div>
  </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
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



<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>



<script type="text/javascript">
$(document).ready(function () {
  
  $('#quickForm').validate({
   
  
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
      $(element).addClass('is-valid');

    }
  });
});

</script>
</body>

</html>
