<?php      

  
  session_start(); 

if(!isset($_SESSION['Email1'])){

$servername="localhost";
$username="root";
$password="";
$dbname="pfe";

$con=mysqli_connect($servername,$username,$password,$dbname);

      //Redirect the instructor to login page if he/she is not logged in.
      echo "
        <script type='text/javascript'>
          window.location.href ='logout.php';
        </script>
      ";
    }else{

      


    $servername="localhost";
    $username="root";
    $password="";
    $dbname="pfe";
    
    $con=mysqli_connect($servername,$username,$password,$dbname);

    $id = mysqli_real_escape_string($con,$_SESSION['Email2']);



    $sql = "SELECT * FROM listeetud where Email='$id'";
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


        <li class="nav-item ml-md-auto"><a href="../../etudiant/examples/logout.php" class="nav-link"><i
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

                <?php 


if ($row['imagename'] == NULL)
{

?>
                  <img src="../../dist/img/Etu/10.jpg" class="img-circle elevation-2" alt="User Image">


                  <?php 
}

else
{

?>

                 <img src="../../dist/<?php echo $row['imagename'];?>" class="img-circle elevation-2" alt="User Image">

                  <?php 
}

?>

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
                  <a href="pages/mailbox/mailbox.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Boîte de réception</p>
                  </a>
                </li>
              </ul>

            <li class="nav-item has-treeview">
              <a href="pages/mailbox/compose1.php" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Message à l'administrateur
                </p>
              </a>
            </li>


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
 
      <?php

if(isset($_POST['Ajouter2']))  
{
$servername="localhost";
$username="root";
$password="";
$dbname="pfe";


$id0=$row['CodeEt'];

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
   $fileDestination = '../../dist/img/Etu/'.$fileNameNew;
   move_uploaded_file($fileTmpName , $fileDestination);
      
       $fileDestination1 = 'img/Etu/'.$fileNameNew;


      $sql1 = "UPDATE listeetud SET imagename='$fileDestination1' where CodeEt='$id0' ";
      $result1 =$con->query($sql1);
    
      echo  '


      <script src="../../plugins/jquery/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
             <script type="text/javascript">   
      
                      $(document).ready(function(){
      
                       
                        
                        swal.fire({
                          icon: "success",
                          title: "Bien .",
                          text: "Image Ajoutée",
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
  
                   
                    
                    swal.fire({
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
  
                   
                    
                    swal.fire({
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
  
                   
                    
                    swal.fire({
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
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="card card-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-info">

                  <h3 class="widget-user-desc">Etudiant</h3>
                </div>


                <?php 


if ($row['imagename'] === NULL)
{

?>
                <div class="widget-user-image">

                  <img class="zoom img-circle elevation-2" src="../../dist/img/Etu/10.jpg"
                    alt="User">

                </div>

                <div class="card-footer"> <br><br>
                  <div class="row">
                    <form action='' method='post' enctype='multipart/form-data'>
                      <input type="file" name="file" />
                      <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="submit" name="Ajouter2" class="btn btn-success" style='align="center"'>Ajouter
                        Image utilisateur</button></br></br>


                    </form>

                  </div>
                  <!-- /.row -->
                </div>


                <?php 
}

else
{

?>




                <div class="widget-user-image">

<img class="zoom img-circle elevation-2" src="../../dist/<?php echo $row['imagename'];?>"
  alt="User Avatar">

</div>

<div class="card-footer"> <br><br>
<div class="row">
  <form action='' method='post' enctype='multipart/form-data' id="image_form">
    <input type="file" name="file"/>
    <br><br>
     <button type="submit" name="Modifier2" class="btn btn-success" style='align="center"' OnClick="return confirm('êtes-vous sûr de Modifer ?');">Modifier Image
      </button>&nbsp;
      <button type="submit" name="Supr" class="btn btn-danger" style='align="center"' onclick="archiveFunction(this.id)">Supprimer Image
      </button></br></br>


  </form>

</div>
<!-- /.row -->
</div>



<?php 
}

?>

<?php

if(isset($_POST['Modifier2']))  
{
$servername="localhost";
$username="root";
$password="";
$dbname="pfe";


$id0=$row['CodeEt'];

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
   $fileDestination = '../../dist/img/Etu/'.$fileNameNew;
   move_uploaded_file($fileTmpName , $fileDestination);



      
       $fileDestination1 = 'img/Etu/'.$fileNameNew;


      $sql1 = "UPDATE listeetud SET imagename='$fileDestination1' where CodeEt='$id0' ";
      $result1 =$con->query($sql1);
    
      echo  '


      <script src="../../plugins/jquery/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
             <script type="text/javascript">   
      
                      $(document).ready(function(){
      
                       
                        
                        swal.fire({
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
  
                   
                    
                    swal.fire({
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
    
                     
                      
                      swal.fire({
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
  
                   
                    
                    swal.fire({
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


<?php

if(isset($_POST['Supprimer2']))  
{
$servername="localhost";
$username="root";
$password="";
$dbname="pfe";


$id0=$row['CodeEt'];

//connexion au serveur
$con=mysqli_connect($servername,$username,$password,$dbname);



   $sql0 = "UPDATE listeetud SET imagename=NULL where CodeEt='$id0' ";
   $result0 =$con->query($sql0);

   echo  '


   <script src="../../plugins/jquery/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
          <script type="text/javascript">   
   
                   $(document).ready(function(){
   
                    
                     
                     swal.fire({
                       icon: "success",
                       title: "Bien .",
                       text: "Image Supprimée",
                     })
                   });
                 </script>
   ';
    
    echo("<meta http-equiv='refresh' content='2'>");



}

?>

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

$id0=$row['CodeEt'];

$value1 = $_POST['Nom'];
$value2 = $_POST['Email'];
$value3 = $_POST['Password'];
$value4 = $_POST['Ville'];
$value5 = $_POST['Tel'];

$sql2="SELECT * From listeetud where Nom='$value1' and Email='$value2' and Password='$value3' and Ville='$value4'  and Tel='$value5' ";
$result2 =$con->query($sql2);

if ($result2->num_rows > 0 ) {
  
  echo  '


  <script src="../../plugins/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script type="text/javascript">   
  
                  $(document).ready(function(){
  
                   
                    
                    swal.fire({
                      icon: "error",
                      title: "Ouups ..",
                      text: "Données deja exists",
                    })
                  });
                </script>
  ';

}

else{

  
  $sql1 = "UPDATE listeetud SET Nom='$value1' , CodeEt='$id0' , Password='$value3' , Ville='$value4' , Tel='$value5' where  Email='$value2'";
  $result1 =$con->query($sql1);

  echo  '


  <script src="../../plugins/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script type="text/javascript">   
  
                  $(document).ready(function(){
  
                   
                    
                    swal.fire({
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

                    <form method="POST" action="" onsubmit="return confirm('êtes-vous sûr de modifier ?');" id="quickForm">

                      <div class="active tab-pane ">
                        

                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-7">
                              <input class="form-control" type="text" name="Email" placeholder="Email" required
                              title="Email Invalid" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="<?php echo $row['Email'];?>" readonly>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
                            <div class="col-sm-7">
                              <input class="form-control" type="text" name="Nom" placeholder="Nom" required
                              title="Nom Invalid" pattern="[A-Za-z ]{2,32}" value="<?php echo $row['Nom'];?>"> </div>
                          </div>

                         

                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Mot de passe</label>
                            <div class="col-sm-7">
                              <input class="form-control" type="text" name="Password" placeholder="Mot de passe"
                              title="Mot de passe Invalid" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required
                                value="<?php echo $row['Password'];?>">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Ville</label>
                            <div class="col-sm-7">
                              <input class="form-control" type="text" name="Ville" placeholder="Ville" required
                              title="Ville Invalid" pattern="[A-Za-z ]{3,32}" value="<?php echo $row['Ville'];?>">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Telephone</label>
                            <div class="col-sm-7">
                              <input class="form-control" type="text" name="Tel" placeholder="Tel" required
                              title="Tel Invalid" pattern="[0-9]{10}" value="<?php echo $row['Tel'];?>">
                            </div>
                          </div>


                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <br>  <button type="submit" name="Modifier"
                                class="btn btn-primary ">Modifier</button>
                               </div>
                          </div>  
                                </form>

                          <div class="text-right">
                                <button type="submit" name="su"
                                class="btn btn-danger " onclick="archiveFunction1(this.id)">Supprimer Votre Compte</button>
                          </div>                               
                                
                           
                        
                      </div>
                      <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>


            </div>









            <!-- /.nav-tabs-custom -->
          </div>



          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- /.container-fluid -->
      </section>



      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
    
    <strong>Copyright &copy;<script>document.write(new Date().getFullYear());</script></strong> 
  </footer>
  </div>
  <!-- Control Sidebar -->
  
  <!-- ./wrapper -->



</div>



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

function archiveFunction(id) {
event.preventDefault(); // prevent form submit
var form = event.target.form;

Swal.fire({
  title: 'Etes-vous sur?',
  text: "Votre Image sera supprimée!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Oui, Supprime la!'
}).then((result) => {
  if (result.value) {

    $(document).ready(function() {
           
               $.ajax({  
                    url: "Viewetu1/supr_img.php",  
                    method: "POST",  
                   
                    success: function(status) {
                      
                  
                $(document).ready(function(){
              
  swal.fire({
    icon: "success",
    title: "Bien .",
    text: "Image supprimée",
  })
});

  }
                });
              
            });

setTimeout(function(){window.location = window.location}, 2000); 
}
});

}         
</script>


<script type="text/javascript">
var haha = "<?php echo $id ?>";
function archiveFunction1(id) {
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
setTimeout(function(){location.href="logout.php"} , 2000);  

        }
    });
    
  }
});
}
 

</script>
</body>

</html>

