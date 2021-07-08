
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
$dbname="siteweb";

$con=mysqli_connect($servername,$username,$password,$dbname);

    $value1 = '1';

    $sql = "SELECT * FROM user "; 
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
  </title>




  <link href="../../dist/img/cap.png" rel="shortcut icon" />   <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
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
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i>Messages
         
          </a>
          <div class="dropdown-divider"></div>
          <a href="../../Admin/examples/edit_adm.php" class="dropdown-item">
            <i class="fas fa-users mr-2"></i>Profil
      
          </a>
         
         
         
      </li>
      
                
                <li class="nav-item ml-md-auto"><a href="../../Admin/examples/logout.php" class="nav-link"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
              
    </ul>
  </nav>
  <!-- /.navbar -->

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
                Contact
                <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link active">
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Boîte de réception</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Boîte de réception</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">

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
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Boîte de réception</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control" placeholder="Search Mail">
                  <div class="input-group-append">
                    <div class="btn btn-primary">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-controls">
                <!-- Check all button -->
               &nbsp;&nbsp;
                <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm" onclick="archiveFunction(this.id)"><i class="far fa-trash-alt"></i></button>
                  
               
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm" onclick='window.location.reload(false)' value="Rafraichir"><i class="fas fa-sync-alt"></i></button>
              
                 </div>
              </div>

               <form name="f1" action = "" onsubmit = "return validation()" method = "POST">


              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>


       <?php

$servername="localhost";
$username="root";
$password="";
$dbname="siteweb";


    $con=mysqli_connect($servername,$username,$password,$dbname);
        
    // $id = mysqli_real_escape_string($con);                 


$sql = "SELECT * FROM user";
$result =$con->query($sql);

$result = $con->query($sql) or die($con->error);

        

// intialisation de la variable $news
      

// tant qu'il y a un enregistrement, les instructions dans la boucle s'exécutent
while ($ligne = $result->fetch_assoc() ) 
{ ?>          

<tbody>
                  <tr>

                    <td>
                     
                    </td>

                    <td class="mailbox-name"><b><?php echo 'De &nbsp;'.$ligne["nom"].''; ?></b></td>

                     <td class="mailbox-name"><b>À : &nbsp;</b><?php echo $ligne["mail"]; ?>
                       
                     </td>

                    <td class="mailbox-subject"> <a href="read-mail1.php?msg=<?php echo $ligne["msg"]; ?>" ><?php echo 'Message : </a>'.$ligne["msg"]; ?>
                    </td>
                    
                    
                    
                  </tr>          

                  <?php } 



while ($ligne = $result->fetch_assoc()) 
{ ?>           

                  <tr>
                    <td>
                      
                    </td>
                    <td class="mailbox-name"><b><?php echo 'De &nbsp;'.$ligne["nom"].''; ?></b></td>

                     <td class="mailbox-name"><b>À : &nbsp;</b><?php echo $ligne["mail"]; ?>
                       
                     </td>

                    <td class="mailbox-subject"><a href="read-mail.php?msg=<?php echo $ligne["msg"]; ?>" ><?php echo 'Message :</a>' .$ligne["Message"]; ?>
                    </td>
                    
                    
                    
                  </tr>          

                  <?php } 

                  ?>
                  </tbody>
                </table>
                <!-- /.table -->
              


              </div>
            </div>


          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <footer class="main-footer">
    
    <strong>Copyright &copy;<script>document.write(new Date().getFullYear());</script></strong> 
  </footer>
  </div>
</div>
<!-- ./wrapper -->
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('êtes-vous sûr de tous supprimer ?')){
          
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- Page Script -->

<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script type="text/javascript">
function archiveFunction(id) {
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
Swal.fire({
  title: 'Etes-vous sur?',
  text: "Tous les Messages seront supprimés!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Oui, Supprime les!'
}).then((result) => {
  if (result.value) {

    $.ajax({
        method: 'POST',
        url: 'delete_mails.php',
        success: function(data) {
           
          $(document).ready(function(){
  
                   
                    
  swal.fire({
    icon: "success",
    title: "Bien .",
    text: "Tous les Messages sont supprimés",
  })
});
setTimeout(function(){location.href="mailbox.php"} , 2000);  

        }
    });
    
  }
});
}
 

</script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
