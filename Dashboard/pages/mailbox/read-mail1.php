<?php
  include("../../Admin/examples/connection/DB.php");
?>

<?php  
$servername="localhost";
$username="root";
$password="";
$dbname="siteweb";

$con=mysqli_connect($servername,$username,$password,$dbname);



$value1 = '1';

$sql = "SELECT * FROM admin"; 
$result1 =$con->query($sql);

$row1 = mysqli_fetch_assoc($result1);


  $msg=$_REQUEST["msg"];

  $query = "SELECT * from user where  msg='$msg'";
  $result =$con->query($query);
  $row = mysqli_fetch_array($result);
  ?>


  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
  Administration
  </title>

  <link href="../../dist/img/fsjes.png" rel="shortcut icon" />   <!-- Tell the browser to be responsive to screen width -->
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
        <!-- <div class="image">
          <img src="../../dist/<?php echo $row1['imagename'];?>" class="img-circle elevation-2" alt="User Image">
        
        </div> -->

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
                Contact
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
                    <p style="text-align:left;">Lire Mail</p>
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
              <a href="../../Admin/examples/notification.php" class="nav-link ">
            &nbsp; <i class="fa fa-bell" style="font-size: 18;"  id="over" data-value ="<?php echo $count_active;?>" style="z-index:-99 !important;font-size:10px;color:white;margin:0.6rem 0.1rem !important;"></i>


                <p>
              &nbsp; Notifications

                </p><?php if(!empty($count_active)){?>
                    <div class="round"  data-value ="<?php echo $count_active;?>"><span><?php echo $count_active; ?></span></div>
                    <?php }?>
              </a>
            </li>
<!------------ Evenement ------------>
<li class="nav-item ">
<a href="../../Admin/examples/Evenements.php" class="nav-link ">
              <i class="far fa-calendar-alt"></i>
                <p>
                Evenements

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
</style>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>Lire Mail</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Lire mail</li>
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
          <a href="mailbox.php" class="btn btn-primary btn-block mb-3">Retour au bo??te de r??ception</a>

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
                  <i class="far fa-envelope"></i> Messages Envoy??s
                  </a>
                </li>              
                <!-- supprimer -->
                <!-- <li class="nav-item">
                  <a href="mails_deleted.php" class="nav-link">
                    <i class="far fa-trash-alt"></i> Corbeille
                  </a>
                </li> -->
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
        
            <!-- /.card -->
           
            <!-- /.card -->
          </div>
          <!-- /.col -->
      
       <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card-header">
            <h3 class="card-title" >Lire Mail</h3>

              <div class="card-tools">
                <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info">
              <h5><b>De</b> &nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['nom']; ?></h5>
                <h6>
                  <span class="mailbox-read-time float-right"><?php echo $row['mail']; ?></span></h6>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border text-center"> 
                <div class="btn-group">
 
                </div>     
                <!-- /.btn-group -->
               
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <?php echo '<b>Message :</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$msg; ?>
              </div>
              <!-- /.mailbox-read-message -->
            </div>


          
            <!-- /.card-footer -->
            <div class="card-footer">
              <div class="float-right">

                <a href="compose1.php?msg=<?php echo $row['msg']; ?>" class="nav-link"><button type="button" class="btn btn-default"><i class="fas fa-share"></i>Repondre</button></a>
              </div>

              <!-- supprimer -->
              <!-- <button type="submit" name="delete" class="btn btn-default" onclick="archiveFunction(this.id)"><i class="far fa-trash-alt"></i>Supprimer</button> -->
              <a class="delete btn btn-danger btn-sm" href="suppmail.php?id=<?php echo $row["id"]; ?>">
                            <i class="far fa-trash-alt"></i>

                            Supprimer
                          </a>
            </div>
            <!-- /.card-footer -->
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
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

 <script src="../../plugins/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script type="text/javascript">
var haha = "<?php echo $msg ?>";
function archiveFunction(id) {
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
Swal.fire({
  title: 'Etes-vous sur?',
  text: "Ce Message sera supprim??!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Oui, Supprime le!'
}).then((result) => {
  if (result.value) {

    $.ajax({
        method: 'POST',
        data: {'msg' : haha },
        url: 'delete_mail1.php',
        success: function(data) {
           
          $(document).ready(function(){
  
                   
                    
  swal.fire({
    icon: "success",
    title: "Bien .",
    text: "Message supprim??",
  })
});
setTimeout(function(){location.href="mailbox.php"} , 2000);  

        }
    });
    
  }
});
}
 

</script>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
