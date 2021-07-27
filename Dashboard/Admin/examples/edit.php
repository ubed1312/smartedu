<?php
  include("./connection/DB.php");
?>
<?php    

    include('dbconnection.php');  

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
      
          $value1 = '1';
      
          $sql = "SELECT * FROM admin where Code_Adm='$value1'"; 
          $result1 = mysqli_query($mysqli, $sql) or die ( mysqli_error($mysqli));
          
          $row1 = mysqli_fetch_assoc($result1);


$id=$_REQUEST["id"];
$query = "SELECT * from listeprof where ID='".$id."'"; 
$result = mysqli_query($mysqli, $query) or die ( mysqli_error($mysqli));
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  Administration
  </title>
  <link href="../../dist/img/fsjes.png" rel="shortcut icon" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
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
  transform: scale(3); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
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
              <i class="fas fa-users mr-2"></i>Profile

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
                  <img src="../../dist/<?php echo $row1['imagename'];?>" class="img-circle elevation-2"
                    alt="User Image">

                </div>

                <p style="text-transform: uppercase;">
                  <b>
                    &nbsp; <?php echo $row1['Nom'];?>
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
            <a href="tables.php" class="nav-link active">
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
              <a href="notification.php" class="nav-link ">
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
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Form Professeur</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Form Prof</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit Prof</h3>
                </div>
                <!-- /.card-header -->

                <?php


if(isset($_POST['Modifier']))  
 {

$value1 = $_POST['Nom'];
$value9 = $_POST['cin'];
$value2 = $_POST['Ville'];
$value3 = $_POST['matiere'];
$value4 = $_POST['Email'];
$value5 = $_POST['tel'];
$value6 = $_POST['Skills'];

// $value7 = $_POST['identifiant'];
$value8 = $_POST['password'];


$sql="SELECT * From listeprof where nom='$value1' and ville='$value2' and matiere='$value3' and tel='$value5' and email='$value4' and Skills='$value6' and password='$value8'and cin='$value9'";
$result = $mysqli->query($sql); 


if ($result->num_rows > 0 ) {

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

 $sql1 = "UPDATE listeprof SET nom='$value1', ville='$value2', matiere='$value3' , email='$value4'  ,tel='$value5'  ,  Skills='$value6' ,password='$value8',cin='$value9' where ID='$id'";
 $result1 =$mysqli->query($sql1);

 echo  '


 <script src="../../plugins/jquery/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script type="text/javascript">   
 
                 $(document).ready(function(){
 
                  
                   
                   swal({
                     icon: "success",
                     title: "Bien .",
                     text: "Le Prof a ete modifiée",
                   })
                 });
               </script>
 ';

 echo("<meta http-equiv='refresh' content='2'>");

}
}

?>
                <!-- form start -->
                <form method="POST" action="" onsubmit="return confirm('êtes-vous sûr de modifier ?');" id="quickForm">



                  <div class="card-body">

                    <div class="form-group">
                      <label>Email addresse</label>
                      <input class="form-control" type="text" name="Email" placeholder="Email"
                      title="Email Invalid"   value="<?php echo $row['email'];?>" >
                    </div>

                    <div class="form-group">
                      <label>Nom & Prénom</label>
                      <input class="form-control" type="text" name="Nom" placeholder="Nom"
                      title="Nom Invalid"    value="<?php echo $row['nom'];?>">
                    </div>
                    <div class="form-group">
                      <label>CIN</label>
                      <input class="form-control" type="text" name="cin" placeholder="CIN"
                      title="Nom Invalid"   value="<?php echo $row['cin'];?>">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Ville</label>
                      <input class="form-control" type="text" name="Ville" placeholder="Ville"
                      title="Ville Invalid" value="<?php echo $row['ville'];?>">
                    </div>

                    <div class="form-group">
                      <label>Telephone</label>
                      <input class="form-control" type="text" name="tel" placeholder="Telephone"
                      title="Telephone Invalid"  value="<?php echo $row['tel'];?>">
                    </div>
                    <div class="form-group">
                      <label>Matiere</label>
                      <input class="form-control" type="text" name="matiere" placeholder="Matiere"
                      title="Matiere Invalid"  value="<?php echo $row['matiere'];?>">
                    </div>

                    <!-- <div class="form-group">
                      <label>Education</label>
                      <input class="form-control" type="text" name="Education" placeholder="Education"
                      title="Champ Invalid" pattern="[A-Za-z-à-é ]{4,70}"  value="<?php echo $row['Education'];?>">
                    </div> -->

                    <div class="form-group">
                      <label>Compétences</label> 
                      <input class="form-control" type="text" name="Skills" placeholder="Skills"
                      title="Champ Invalid"  value="<?php echo $row['skills'];?>">
                    </div>
                    <!-- <div class="form-group">
                      <label>Identifiant</label>
                      <input class="form-control" type="text" name="identifiant" value="<?php echo $row['identifiant'];?>" title="Champ Invalid" value="">
                    </div> -->
                    <div class="form-group">
                      <label>Password</label>
                      <input class="form-control" type="text" name="password" value="<?php echo $row['password'];?>" title="Champ Invalid" value="">
                    </div>


                  </div>

                  <div class="card-footer">
                    <button class="btn btn-primary" name="Modifier" type="submit">
                      Enregistrer
                    </button>
                  </div>
                </form>

              </div>
            </div>

            <div class="col-md-4">
              <div class="card card-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-info">
                  <h3 class="widget-user-desc">Professeur</h3>

                </div>
                <div class="widget-user-image">
                  <img class="zoom img-circle elevation-2" src="<?php echo $row['file'];?>"
                    alt="User Avatar">

                </div>


                <div class="card-footer"> <br><br><br><br>

                  

                  <!-- /.row -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
    
    <strong>Copyright &copy;<script>document.write(new Date().getFullYear());</script></strong> 
  </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  </div>
  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      bsCustomFileInput.init();
    });

  </script>


<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>



<script type="text/javascript">
$(document).ready(function () {
  
  $('#quickForm').validate({
    rules: {
      username: {
        required: true,
        
      },
      ville: {
        required: true,
      
      },
      mat: {
        required: true,
        
      },
      Email: {
        required: true,
      },
     
      Educ: {
        required: true,
      },
      Skil: {
        required: true,
      },
   
    },
  
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
