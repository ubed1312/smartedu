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

              <a href="#" class="nav-link active">
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
              <a href="Map.php" class="nav-link">
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
                  <img class="zoom img-circle elevation-2" src="../../dist/<?php echo $row['imagename'];?>"
                    alt="User Avatar">

                </div>


                <?php

if(isset($_POST['Modifier2']))  
{
$servername="localhost";
$username="root";
$password="";
$dbname="pfe";


$id0=$row['ID'];

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
   $fileDestination = '../../dist/img/Prof/'.$fileNameNew;
   move_uploaded_file($fileTmpName , $fileDestination);



      
       $fileDestination1 = 'img/Prof/'.$fileNameNew;


      $sql1 = "UPDATE listeProf SET imagename='$fileDestination1' where ID='$id0' ";
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
                <div class="card-footer"> <br><br>

                <div class="row">
 
 </div>

                      <form action='' method='post' enctype='multipart/form-data' onsubmit="return confirm('êtes-vous sûr de modifier ?');">

                        <input type="file" name="file" required/>
                        <br><br>
                        <center>
                        <button type="" name="Modifier2" class="delete btn btn-success" style='align="center"'>Modifier Image professeur
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

            <div class="col-md-9 ">
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
  $dbname="pfe";
  
  $con=mysqli_connect($servername,$username,$password,$dbname);



$value1 = $_POST['nom'];
$value2 = $_POST['ville'];
$value3 = $_POST['matiere'];
$value4 = $_POST['email'];
$value5 = $_POST['pass'];
$value6 = $_POST['edu'];
$value7 = $_POST['skills'];
$value8 = $_POST['categorie'];
$value9 = $_POST['Prix'];

$sql2="SELECT * From listeprof where nom='$value1' and ville='$value2' and Prix='$value9' and matiere='$value3' and email='$value4' and password='$value5' and Education='$value6' and Skills='$value7'and categorie='$value8'  ";
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

  
  $sql1 = "UPDATE listeprof SET  nom='$value1', ville='$value2' , matiere='$value3'  ,Prix='$value9', password='$value5' , Education='$value6' , Skills='$value7' , categorie='$value8' where  email='$value4'";
  $result1 =$con->query($sql1);

  echo  '


  <script src="../../plugins/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script type="text/javascript">   
  
                  $(document).ready(function(){
  
                   
                    
                    swal({
                      icon: "success",
                      title: "Bien .",
                      text: "Profile modifiée",
                    })
                  });
                </script>
  ';



echo("<meta http-equiv='refresh' content='2'>");

}

}


?>

                    <form method="POST" action=""  onsubmit="return confirm('êtes-vous sûr de modifier ?');" id="quickForm">

                     

                      <div class="active tab-pane ">
                        <form class="form-horizontal">

                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-7">
                              <input class="form-control" type="Email" name="email" placeholder="Email" readonly
                               value="<?php echo $row['email'];?>">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
                            <div class="col-sm-7">
                              <input class="form-control" type="text" name="nom" placeholder="Nom" required
                              title="Nom Invalid" pattern="[A-Za-z ]{2,32}" value="<?php echo $row['nom'];?>"> </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Ville</label>
                            <div class="col-sm-7">
                              <input class="form-control" type="text" name="ville" placeholder="Ville" required
                              title="Ville Invalid" pattern="[A-Za-z ]{3,32}" value="<?php echo $row['ville'];?>">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Matiere</label>
                            <div class="col-sm-7">
                              <input class="form-control" type="text" name="matiere" placeholder="Matiere" minlength='2' required
                              title="Matiere Invalid" value="<?php echo $row['matiere'];?>">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Categorie</label>
                            <div class="col-sm-7">
                              <input class="form-control" type="text" name="categorie" placeholder="Categorie" required
                              title="Categorie Invalid" minlength='2' value="<?php echo $row['categorie'];?>">
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Prix/H</label>
                            <div class="col-sm-7">
                              <input class="form-control" type="text" name="Prix" placeholder="Prix" required
                              title="Prix Invalid" pattern='[0-9]+(\\.[0-9][0-9]?)?' value="<?php echo $row['Prix'];?>">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Mot de passe</label>
                            <div class="col-sm-7">
                              <input class="form-control" type="text" name="pass" placeholder="Password"
                              pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required
                              title="Mot de passe Invalid"  value="<?php echo $row['password'];?>">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Education</label>
                            <div class="col-sm-7">
                              <input class="form-control" type="text" name="edu" placeholder="Education" required
                              title="Champ Invalid" value="<?php echo $row['Education'];?>">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Compétences</label>
                            <div class="col-sm-7">
                              <input class="form-control" type="text" name="skills" placeholder="Skills" required
                              title="Champ Invalid" minlength='4' value="<?php echo $row['Skills'];?>">
                            </div>
                          </div>
                          


                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <button type="" name="Modifier" class="delete btn btn-primary">Modifier</button></br></br>
                            </div>
                          </div>
                        </form>

                        <div class="text-right">
                                <button type="submit" name="su"
                                class="btn btn-danger " onclick="archiveFunction(this.id)">Supprimer Votre Compte</button>
                          </div>      

                      </div>
                  </div>
                </div>
              </div>

      </section>
    </div>

    <footer class="main-footer">
    
    <strong>Copyright &copy;<script>document.write(new Date().getFullYear());</script></strong> 
  </footer>
    <!-- /.content-wrapper -->


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


 

<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>

<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

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




<script type="text/javascript">
var haha = "<?php echo $id ?>";
function archiveFunction(id) {
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
Swal.fire({
  title: 'Etes-vous sur?',
  text: "Votre Compte sera supprimé!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Oui, Supprime le!'
}).then((result) => {
  if (result.value) {

    $.ajax({
        method: 'POST',
        data: {'id' : haha },
        url: 'delete.php',
        success: function(data) {
           
          $(document).ready(function(){
  
                   
                    
  swal.fire({
    icon: "success",
    title: "Bien .",
    text: "Compte supprimé",
  })
});
setTimeout(function(){location.href="../../../Login_v16/index.php"} , 2000);  

        }
    });
    
  }
});
}
 

</script>
</body>

</html>
