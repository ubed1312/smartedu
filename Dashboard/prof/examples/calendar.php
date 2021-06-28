
  <?php  

require_once('bdd.php');
require_once('dbconnection.php');

   
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

    
    $id2 = $row['ID'];
    
    $sql = "SELECT * FROM events where ID='$id2'";
    
    $req = $bdd->prepare($sql);
    $req->execute();
    
    $events = $req->fetchAll();



    }

    
   
 


?> <!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    Super Prof
  </title>
  <link href="../../dist/img/cap.png" rel="shortcut icon" />  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="../../plugins/fullcalendar/main.min.css">
  <link rel="stylesheet" href="../../plugins/fullcalendar-daygrid/main.min.css">
  <link rel="stylesheet" href="../../plugins/fullcalendar-timegrid/main.min.css">
  <link rel="stylesheet" href="../../plugins/fullcalendar-bootstrap/main.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
  
  <!-- FullCalendar -->
  <link href='css/fullcalendar.css' rel='stylesheet' />



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
    <div class="sidebar">
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
              <a href="#" class="nav-link active">
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
            <h1>Calendrier</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
              <li class="breadcrumb-item active">Calendrier</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                
                <div id="calendar" class="col-centered">
                </div>
            </div>
      
        </div>
        <!-- /.row -->


 <?php

// Connexion à la base de données
require_once('bdd.php');
require_once('dbconnection.php');
//echo $_POST['title'];
if(isset($_POST['Ajouter']))  {
	
	$title = $_POST['titre'];
	$start = $_POST['start'];
  $end = $_POST['end'];
  
  if($title == 'Disponible'){

    $color = '#008000';
    }
    else{
      $color = '#FF0000';
    }


	$sql0 = "SELECT events.start , events.end , events.ID , listeprof.ID  FROM events
	INNER JOIN listeprof ON events.ID = listeprof.ID where events.start = '$start' and events.end = '$end' and events.ID = '$id2' ";
	$result = $con->query($sql0);


	if ($result->num_rows > 0) {
		

    echo  '


    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
           <script type="text/javascript">   
    
                    $(document).ready(function(){
    
                     
                      
                      swal({
                        icon: "error",
                        title: "Ouups ..",
                        text: "Il y a un probleme",
                      })
                    });
                  </script>
    ';
		
     }
     elseif ($_POST['titre'] ==NULL) {
		

      echo  '


    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
           <script type="text/javascript">   
    
                    $(document).ready(function(){
    
                     
                      
                      swal({
                        icon: "error",
                        title: "Ouups ..",
                        text: "Champ Vide",
                      })
                    });
                  </script>
    ';
      
       }
	   else{

	  
      $sql = "INSERT INTO events(ID,title, color, start, end) values ('$id2','$title', '$color', '$start', '$end')";
      //$req = $bdd->prepare($sql);
	//$req->execute();
	
  echo  '


  <script src="../../plugins/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script type="text/javascript">   
  
                  $(document).ready(function(){
  
                   
                    
                    swal({
                      icon: "success",
                      title: "Bien .",
                      text: "Date Ajouté",
                    })
                  });
                </script>
  ';

	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}

}


echo("<meta http-equiv='refresh' content='2'>");

}
?>   
    <!-- Modal -->
    <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
      <div class="modal-content">

      <form class="form-horizontal" method="POST" action="" >
      
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
        </div>
        <div class="modal-body">
        
          <div class="form-group">
          <label for="title" class="col-sm-2 control-label">Disponibilité </label><br><br>
          <div class="col-sm-10">

<select name="titre" class="form-control" id="titre" >

<option value="" name="titre" id="titre">Choose</option>

            <option type="text"> Disponible</option>             
              <option type="text" > Non-Disponible</option>


              </select>

          </div>
          </div>


          <div class="form-group">
          <label for="color" class="col-sm-2 control-label" hidden>Color</label>
          <div class="col-sm-10">

            <select name="color" class="form-control" id="color" hidden>
              <option value="">Choose</option>

              <option style="color:#008000;" value="#008000">&#9724; Vert</option>             
              <option style="color:#FF0000;" value="#FF0000">&#9724; Rouge</option>
              
            </select>
          </div>
          </div>
          <div class="form-group">
          <label for="start" class="col-sm-2 control-label" hidden>Date de début</label>
          <div class="col-sm-10">
            <input type="hidden" name="start" class="form-control" id="start" readonly>
          </div>
          </div>
          <div class="form-group">
          <label for="end" class="col-sm-2 control-label" hidden>Date de fin</label>
          <div class="col-sm-10">
            <input type="hidden" name="end" class="form-control" id="end" readonly>
          </div>
          </div>
        
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        <button type="submit" name="Modifier" class="btn btn-success">Modifier</button>   
        <button type="submit" name="Ajouter" class="btn btn-primary">Ajouter</button>

</form>
        </div>
     
      </div>
      </div>
    </div>
    
    
    <?php

// Connexion à la base de données
require_once('bdd.php');
require_once('dbconnection.php');
//echo $_POST['title'];
if(isset($_POST['Modifier']))  {
  
  
  $title = $_POST['titre'];

  if($title == 'Disponible'){

	$color = '#008000';
  }
  else{
    $color = '#FF0000';
  }
	$start = $_POST['start'];
	$end = $_POST['end'];



	$sql0 = "SELECT events.color , events.title , events.start , events.end , events.ID , listeprof.ID  FROM events
	INNER JOIN listeprof ON events.ID = listeprof.ID where events.start = '$start' and events.end = '$end' and events.title = '$title' and events.color = '$color' and events.ID = '$id2' ";
	$result = $con->query($sql0);


	if ($result->num_rows > 0) {
		

    echo  '


    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
           <script type="text/javascript">   
    
                    $(document).ready(function(){
    
                     
                      
                      swal({
                        icon: "error",
                        title: "Ouups ..",
                        text: "Il y a un probleme",
                      })
                    });
                  </script>
    ';
		
     }
     elseif ($_POST['titre'] ==NULL) {
		

      echo  '


    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
           <script type="text/javascript">   
    
                    $(document).ready(function(){
    
                     
                      
                      swal({
                        icon: "error",
                        title: "Ouups ..",
                        text: "Champ Vide",
                      })
                    });
                  </script>
    ';
      
       }
	   else{
	  
	$sql = "UPDATE events SET color='$color' , title='$title' WHERE start = '$start' and end = '$end' ";
	//$req = $bdd->prepare($sql);
	//$req->execute();
	
  $result2 = $con->query($sql);

  echo  '


  <script src="../../plugins/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script type="text/javascript">   
  
                  $(document).ready(function(){
  
                   
                    
                    swal({
                      icon: "success",
                      title: "Bien .",
                      text: "Date Modifiée",
                    })
                  });
                </script>
  ';

}
echo("<meta http-equiv='refresh' content='2'>");

}

	
?>
 
    <!-- Modal -->
   

    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
  <footer class="main-footer">
    
    <strong>Copyright &copy;<script>document.write(new Date().getFullYear());</script></strong> 
  </footer>
  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
 <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
  
  <!-- FullCalendar -->
  <script src='js/moment.min.js'></script>
  <script src='js/fullcalendar.min.js'></script>


  
  <script>

  $(document).ready(function() {
    
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay'
      },

      
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      selectable: true,
      selectHelper: true,
      select: function(start, end) {
        
        $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
        $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
        $('#ModalAdd').modal('show');
      },
      eventRender: function(event, element) {
        element.bind('dblclick', function() {
          $('#ModalEdit #ID1').val(event.ID1);
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

          ID1: '<?php echo $event['ID1']; ?>',


          title: '<?php echo $event['title']; ?>',
          start: '<?php echo $start; ?>',
          end: '<?php echo $end; ?>',
          color: '<?php echo $event['color']; ?>',
        },
      <?php endforeach; ?>
      ]
    });
    
    function edit(event){
      start = event.start.format('YYYY-MM-DD HH:mm:ss');
      if(event.end){
        end = event.end.format('YYYY-MM-DD HH:mm:ss');
      }else{
        end = start;
      }
      
      ID1 =  event.ID1;
      
      Event = [];
      Event[0] = ID1;
      Event[1] = start;
      Event[2] = end;
      
      $.ajax({
       url: 'editEventDate.php',
       type: "POST",
       data: {Event:Event},
       success: function(rep) {
          if(rep == 'OK'){
            
            alert('Saved');
          }else{
            alert('Erreur'); 
            location.reload(); 
          }
        }
      });
    }
    
  });

</script>


  <!-- jQuery UI -->
  <script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>
