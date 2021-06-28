<?php      


include('../../Admin/examples/dbconnection.php');  

session_start(); 


if(!isset($_SESSION['Email'])){


      //Redirect the instructor to login page if he/she is not logged in.
      echo "
        <script type='text/javascript'>
          window.location.href = '../../Admin/examples/admin.php';
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
$result1 =$con->query($sql);

$row1 = mysqli_fetch_assoc($result1);

    $msg=$_REQUEST["msg"];


$query = "SELECT * from listeprof where email='$msg'"; 
$result = mysqli_query($mysqli, $query) or die ( mysqli_error($mysqli));
$row = mysqli_fetch_assoc($result);

   
  ?>


  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    Super Prof
  </title>

  <link href="../../dist/img/cap.png" rel="shortcut icon" />   <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
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
          <a href="mailbox.php" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i>Messages
         
          </a>
          <div class="dropdown-divider"></div>
          <a href="../../Admin/examples/edit_adm.php" class="dropdown-item">
            <i class="fas fa-users mr-2"></i>Profile
      
          </a>
         
         
         
      </li>
      
                
                <li class="nav-item ml-md-auto"><a href="../../Admin/examples/logout.php" class="nav-link"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
              
    </ul>
  </nav>
    <!-- /.navbar -->
  
    <!-- Main Sidebar Container -->
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


      <a href="../../Admin/examples/edit_adm.php" class="nav-link">
        <div class="image">
          <img src="../../dist/<?php echo $row1['imagename'];?>" class="img-circle elevation-2" alt="User Image">
        
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
              <a href="../../Admin/examples/tables.php" class="nav-link">
                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                <p>
                Liste des professeurs
                 
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="../../Admin/examples/students.php" class="nav-link">
                <i class="nav-icon fas fa-user-graduate"></i>
                <p>
                Liste des Etudiants
                 
                </p>
              </a>
            </li>
            
           
           
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  Mail
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="mailbox.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Boite de reception</p>
                  </a>
                </li>
              
                <li class="nav-item">
                  <a href="#" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Composer</p>
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Composer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Composer</li>
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
          <a href="mailbox.php" class="btn btn-primary btn-block mb-3">Retour au boîte de réception</a>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Dossiers</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">

                <li class="nav-item">
                  <a href="mailbox1.php" class="nav-link">
                  <i class="far fa-envelope"></i> Messages envoyés
                  </a>
                </li>              
                
                <li class="nav-item">
                  <a href="mails_deleted.php" class="nav-link">
                    <i class="far fa-trash-alt"></i> Corbeille
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
        
            <!-- /.card -->
           
            <!-- /.card -->
          </div>
          <!-- /.col -->
  
<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="pfe";

//connexion au serveur
$con=mysqli_connect($servername,$username,$password,$dbname);

 if(isset($_POST['Send']))  
 {

$value1 ='Admin';
$value2 = 'prof';
$value3 = $msg;
$value4 = $_POST['Message'];
$value5 =date("F j, Y, g:i a");
$value6 ="0";
$value7 ="0";

if ($value4 == NULL OR $value4 == '<br>')
{ 
  echo  '


  <script src="../../plugins/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script type="text/javascript">   
  
                  $(document).ready(function(){
  
                   
                    
                    swal({
                      icon: "error",
                      title: "Ouups ..",
                      text: "Veuillez remplir Le champ Message",
                    })
                  });
                </script>
  ';
  
} 

  else
  {

      
    echo  '


    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
           <script type="text/javascript">   
    
                    $(document).ready(function(){
    
                     
                      
                      swal({
                        icon: "success",
                        title: "Bien .",
                        text: "Vous Avez Envoyer un Message!",
                      })
                    });
                  </script>
    ';
      $sql3 = "INSERT INTO contact_adm VALUES('$value1','$value2','$value3','$value4','$value5','$value6','$value7')"; 
      $result3 = $con->query($sql3);

}

}

?>


          <!-- /.col -->       

<div class="col-md-9">
            <div class="card card-primary card-outline">
              <div class="card-header">
              <h3 class="card-title">Message au Professeur</h3>
              </div>

               <form method="POST" action="">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
          
                   <table>

                   <tr>

    <td>Email : &nbsp;</td>
      <td>
        <label>
       <input class="form-control"  Value="<?php echo $row["email"]; ?>" readonly>
      </label>
    </td>
         </tr>


         <tr>
           
             <td>Type : &nbsp;</td>
      <td>
        <label>
       <input class="form-control"  Value="<?php echo 'Professeur'; ?>" readonly>
      </label>
    </td>

    </tr>

   
         
       </table>

                  
                </div>
                
                <div class="form-group">
                    
                                      
                 <textarea id="compose-textarea" name="Message" class="form-control" style="height: 300px">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Cumque eaque, quia repellat distinctio dolorem, veniam 
                    expedita facilis aspernatur tenetur modi at debitis.
                     Qui, error. Ad praesentium esse animi facilis impedit? 
                 </textarea>
                </div>
                
              </div>
             
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">
                  <button type="submit" name="Send" class="btn btn-primary"><i class="far fa-envelope"></i> Envoyer</button>
                </div>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>

  </form>
         
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

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script>
</body>
</html>
