<?php 

  require_once('bdd.php');

include('dbconnection.php');
session_start(); 




if(!isset($_SESSION['Email1'])){



      //Redirect the instructor to login page if he/she is not logged in.
      echo "
        <script type='text/javascript'>
          window.location.href =  'logout.php';
        </script>
      ";
    }
     


    include('dbconnection.php');  

$id=$_REQUEST["id"];

$query = "SELECT * from listeprof where ID='".$id."'"; 
$result = mysqli_query($mysqli, $query) or die ( mysqli_error($mysqli));
$row = mysqli_fetch_assoc($result);


    $servername="localhost";
    $username="root";
    $password="";
    $dbname="pfe";

$con=mysqli_connect($servername,$username,$password,$dbname);

$id1 = mysqli_real_escape_string($con,$_SESSION['Email2']);



$sql = "SELECT * FROM listeetud where Email='$id1'";
$result1 =$con->query($sql);

$row1 = mysqli_fetch_array($result1);
  




$id2 = $row['ID'];
    
    $sql = "SELECT * FROM events where ID='$id2'";
    
    $req = $bdd->prepare($sql);
    $req->execute();
    
    $events = $req->fetchAll();
  ?>
  

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    Super Prof
  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->

  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link href="../../dist/img/cap.png" rel="shortcut icon"/>

      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
      </script>

      <!-- FullCalendar -->
  <link href='css/fullcalendar.css' rel='stylesheet' />
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
          <a href="viewetu.php" class="dropdown-item">
            <i class="fas fa-users mr-2"></i>Profile
      
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
      <div class="user-panel  pb mb-3 ">
<br>
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
       
              <a href="viewetu.php" class="nav-link">
              <div class="image">
              <?php 


if ($row1['imagename'] === NULL)
{

?>
                  <img src="../../dist/img/Etu/10.jpg" class="img-circle elevation-2" alt="User Image">


                  <?php 
}

else
{

?>

                 <img src="../../dist/<?php echo $row1['imagename'];?>" class="img-circle elevation-2" alt="User Image">

                  <?php 
}

?>
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
                    <p>Boite De reception</p>
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
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Profile Professeur</li>
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
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="zoom profile-user-img img-fluid img-circle"
                       src="../../dist/<?php echo $row['imagename'];?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $row['nom'];?></h3>

                <p class="text-muted text-center"><?php echo $row['matiere'];?></p>

                <ul class="list-group list-group-unbordered mb-3">
                <a href="javascript:switchDisplay0();" class="btn btn btn-info btn-block"><i class="fas fa-calendar-alt">
                              </i> &nbsp;<b>Calendrier</b></a>

                <a class="btn btn-primary btn-block" href="javascript:switchDisplay1();" ><i class="fas fa-comments">
                              </i> &nbsp;<b >Contacter</b></a>


                              <a class="btn btn-primary btn-block" name="Position" href="javascript:switchDisplay2();"><i
                        class="fas  fa-map-marker-alt mr-1">
                      </i> &nbsp;<b>Position</b></a>

            

                </ul>

              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Informations</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">  <?php echo $row['Education'];?> </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Localisation</strong>
<p class="text-muted">  <?php echo $row['ville'];?> </p>
                  

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Compétences</strong>
<p class="text-muted">  <?php echo $row['Skills'];?> </p>
                
                

                

                
              </div>
              <!-- /.card-body -->
            </div>
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

$id = mysqli_real_escape_string($con,$_SESSION['Email2']);


 if(isset($_POST['Send']))  
 {

$value1 =$id;
$value2 ='Etu';
$value3 ='prof';
$value4 = $row["email"];
$value5 = $_POST['Message'];
$value6 =date("F j, Y, g:i a");
$value7 ="0";
$value8 ="0";


echo  '


<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
       <script type="text/javascript">   

                $(document).ready(function(){

                 
                  
                  swal.fire({
                    icon: "success",
                    title: "Bien .",
                    text: "Vous Avez envoyer un message!",
                  })
                });
              </script>
';

      $sql3 = "INSERT INTO contact_Etu VALUES('$value1','$value2','$value3','$value4','$value5','$value6','$value7','$value8')"; 
      $result3 = $con->query($sql3);



}

?>

<div class="col-md-9 " id="page_afficher_par_defaut1" style="display:none">

<?php 


$value1=$row["lat"];
$value2=$row["lng"];

if ($value1 == NULL OR $value2 == NULL)
{ 

?>

<h2 style="text-align:center">Ce Profile N'a pas Ajouter sa position</h2>


<?php 

} 

else
{
$latitude = $row["lat"];
$longitude = $row["lng"];

?> 

<iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>

<?php
}
?>



</div>





                   <div class="col-md-9 " id="page_afficher_par_defaut" style="display:none">
            <div class="card ">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
          <form method="POST" action="" id="quickForm">
                  <div class="active tab-pane " >
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="inputName" Value="<?php echo $row["nom"]; ?>" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="inputEmail" Value="<?php echo $row["email"]; ?>" readonly>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Message</label>
                        <div class="col-sm-7">
                          <textarea class="form-control" id="inputExperience" name="Message" placeholder="Message" minlength='2' required></textarea>
                        </div>
                      </div>
                     
                      
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" name="Send" class="btn btn-danger">Submit</button></br></br>
                        </div>
                      </div>
                    </form>



                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>

 </form>


            </div>


            <div class="col-md-9" id="page_cacher_par_defaut">

             
<div class="row">
<div class="col-lg-12 text-center">
    
    <div id="calendar" class="col-centered">
    </div>
</div>

</div>
 
  <!-- /.row -->
</div>


<!-- /.nav-tabs-custom -->
</div>



<!-- /.col -->
</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</section>


<!-- /.content -->


  <!-- /.content-wrapper -->
 <footer class="main-footer">
    
    <strong>Copyright &copy;<script>document.write(new Date().getFullYear());</script></strong> 
  </footer>
</div>
<!-- ./wrapper -->

</div>


<!-- Page specific script -->
<!-- jQuery -->
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

<script type="text/javascript">
    var x = document.getElementById('page_afficher_par_defaut');
    var y = document.getElementById('page_cacher_par_defaut');
    var z = document.getElementById('page_afficher_par_defaut1');

    function switchDisplay0() {


      if (y.style.display === 'none') {

        y.style.display = 'block';
        x.style.display = 'none';
        z.style.display = 'none';


      } else {

        x.style.display = 'none';
        y.style.display = 'none';
        z.style.display = 'none';


      }
    }


    function switchDisplay1() {

      if (x.style.display === 'none') {

        y.style.display = 'none';
        z.style.display = 'none';
        x.style.display = 'block';

      } else {

        x.style.display = 'none';
        y.style.display = 'none';
        z.style.display = 'none';


      }
    }


    function switchDisplay2() {


      if (z.style.display === 'none') {

        x.style.display = 'none';
        y.style.display = 'none';
        z.style.display = 'block';

      } else {

        x.style.display = 'none';
        y.style.display = 'none';
        z.style.display = 'none';


      }
    }

  </script>
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

<script>

  $(document).ready(function() {
    
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay'
      },

      
      editable: false,
      eventLimit: false, // allow "more" link when too many events
      selectable: false,
      selectHelper: false,
      select: function(start, end) {
        
        $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
        $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
        $('#ModalAdd').modal('show');
      },
      eventRender: function(event, element) {
        element.bind('dblclick', function() {
          $('#ModalEdit #ID').val(event.ID);
          $('#ModalEdit #title').val(event.title);
          $('#ModalEdit #color').val(event.color);
          $('#ModalEdit').modal('show');
        });
      },
      eventDrop: function(event, delta, revertFunc) { // si changement de position

        edit(event);

      },
      eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

        edit(event);

      },
      events: [
      <?php foreach($events as $event): 
      
        $start = explode(" ", $event['start']);
        $end = explode(" ", $event['end']);
        if($start[1] == '00:00:00'){
          $start = $start[0];
        }else{
          $start = $event['start'];
        }
        if($end[1] == '00:00:00'){
          $end = $end[0];
        }else{
          $end = $event['end'];
        }
      ?>
        {

          ID: '<?php echo $event['ID']; ?>',


          title: '<?php echo $event['title']; ?>',
          start: '<?php echo $start; ?>',
          end: '<?php echo $end; ?>',
          color: '<?php echo $event['color']; ?>',
        },
      <?php endforeach; ?>
      ]
    });
    
   
    
  });

</script>


<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- FullCalendar -->
<script src='js/moment.min.js'></script>
<script src='js/fullcalendar.min.js'></script>


<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>


</body>

</html>
