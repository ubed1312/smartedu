<?php
  include("./connection/DB.php");
?>
<?php 

include('dbconnection.php');

session_start(); 

if(!isset($_SESSION['Email'])){



      //Redirect the instructor to login page if he/she is not logged in.
      echo "
        <script type='text/javascript'>
          window.location.href ='admin.php';
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des professeurs</title>

<style>
        body {
             margin:0 !important;
             padding:0 !important;
             box-sizing: border-box;
             font-family: 'Roboto', sans-serif;
        }
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
        #list{

          display: none;
          top: 33px;
          position: absolute;
          right: 2%;
          background:#ffffff;
  z-index:100 !important;
    width: 25vw;
    margin-left: -37px;

    padding:0 !important;
    margin:0 auto !important;


        }
        .message > span {
           width:100%;
           display:block;
           color:red;
           text-align:justify;
           margin:0.2rem 0.3rem !important;
           padding:0.3rem !important;
           line-height:1rem !important;
           font-weight:bold;
           border-bottom:1px solid white;
           font-size:1.8rem !important;

        }
        .message{
          /* background:#ff7f50;
          margin:0.3rem 0.2rem !important;
          padding:0.2rem 0 !important;
          width:100%;
          display:block; */

        }
        .message > .msg {
           width:90%;
           margin:0.2rem 0.3rem !important;
           padding:0.2rem 0.2rem !important;
           text-align:justify;
           font-weight:bold;
           display:block;
           word-wrap: break-word;


        }

    </style>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    Super Prof
  </title> <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link href="../../dist/img/fsjes.png" rel="shortcut icon" />
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
              <a href="tables.php" class="nav-link">
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
             <i class="fa fa-bell"   id="over" data-value ="<?php echo $count_active;?>" style="z-index:-99 !important;font-size:10px;color:white;margin:0.6rem 0.1rem !important;"></i>


                <p>
               Notifications

                </p><?php if(!empty($count_active)){?>
                    <div class="round"  data-value ="<?php echo $count_active;?>"><span><?php echo $count_active; ?></span></div>
                    <?php }?>
              </a>
            </li>
<!------------ Evenement ------------>
            <li class="nav-item ">
            <a href="#" class="nav-link active">
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

    <div class="content-wrapper">


      <section class="content">


        <!-- Default box -->
        <div class="card card-info">
          <div class="card-header">
          <h3 class="card-title">Liste des Evenements</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="card-body">
              <div class="table-responsive">
<!-- /*********************************Hadshi ylh kanzido pour ajout prof****************************/ -->
              <table class="table table-striped table-advance table-hover">
                <h4><div class=pull-right>
                <a href="ajouteven.php"><button class="btn btn-success" >Ajouter Evenement</button></a>&nbsp;&nbsp;</div></h4>
                <hr>



<!-- /*********************************Hadshi ylh kanzido pour ajout prof****************************/ -->

                <form name="f1" action="" onsubmit="return validation()" method="POST">



                  <table class="table table-bordered table-striped" id="example1">
                    <thead class=" text-primary">

                      <tr>
                             <th>
                          Image
                        </th>
                      <th>
                          Nom 
                        </th>

                        <th>
                          Description
                        </th>
                        <th>
                          Date
                        </th>

                           <th>
                          Actions
                        </th>
                      </tr>
                    </thead>



                    <tbody>


                      <?php


                        
// $del_at="0"; 
$requete = "SELECT * FROM evenement";
// envoi de la requête
global $resultat;
$resultat = $mysqli->query($requete) or die ('Erreur '.$requete.' '.$mysqli->error);

// intialisation de la variable $news
$news = '';

// tant qu'il y a un enregistrement, les instructions dans la boucle s'exécutent
while ($ligne = $resultat->fetch_assoc()) 
{ ?>
                      <tr>
       <td>
                       <center>
                          <img src="<?php echo $ligne['file'];?>" class="zoom profile-user-img img-fluid img-circle" >
                      </center>
                        </td>
                        <td>
                          <?php echo $ligne["nom"]; ?>
                        </td>

                        
                        <td>
                          <?php echo $ligne["description"]; ?>
                        </td>
                        <td>
                          <?php echo $ligne["date"]; ?>
                        </td>

                        
                        


                     <?php


                        if ($ligne['Date_deleted'] == NULL && $ligne['is_deleted'] =='0')
{

?>
                        <td class="project-actions text-left">

                         <!-- jjjjjj -->
 <?php

if ($ligne['event'] == 'masque')
{

?>
  
       <a class=" btn btn-dark btn-sm" href="affichereven.php?id=<?php echo $ligne["id"] ?>"><i class="fas fa-eye"></i>Afficher</a>

 
  <?php }else{  ?>
  
       <a class=" btn btn-light btn-sm" href="masqueeven.php?id=<?php echo $ligne["id"] ?>"><i class="fas fa-eye"></i>Masquer</a>

  
  <?php } ?>

<!-- jjjj -->



                          <a class="btn btn-info btn-sm" href="editeven.php?id=<?php echo $ligne["id"]; ?>">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Éditer
                          </a>

                          <a class="delete btn btn-danger btn-sm" href="deleteeven.php?id=<?php echo $ligne["id"]; ?>">
                            <i class="fas fa-trash">
                            </i>
                            Supprimer
                          </a>


                          
                        </td>
   <?php 
}

else
{

?>
                             <td class="project-actions text-left">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <a class="btn btn-success btn-sm" href="ajoutevenement.php?id=<?php echo $ligne["id"]; ?>">
                         
                            <i class="fas fa-user-plus">
                            </i>
                            &nbsp; Ajouter une autre fois
                          </a>
                        </td>

<?php 
}

?>




                        <?php } ?>

                      </tr>

                    </tbody>

                  </table>


                </form>
              </div>
            </div>
          </div>
        </div>

      </section>
    </div>




    
    <footer class="main-footer">
    
    <strong>Copyright &copy;<script>document.write(new Date().getFullYear());</script></strong> 
  </footer>
  </div>




  </div>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script language="JavaScript" type="text/javascript">
    $(document).ready(function () {
      $("a.delete").click(function (e) {
        if (!confirm('êtes-vous sûr de supprimer ?')) {
          e.preventDefault();
          return false;
        }
        return true;
      });
    });

  </script>

  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="../../plugins/datatables/jquery.dataTables.js"></script>
  <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- page script -->




  <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });

  </script>
    <script>
$(document).ready(function(){
    var ids = new Array();
    $('#over').on('click',function(){
           $('#list').toggle();
       });

   //Message with Ellipsis
   $('div.msg').each(function(){
       var len =$(this).text().trim(" ").split(" ");
      if(len.length > 12){
         var add_elip =  $(this).text().trim().substring(0, 65) + "…";
         $(this).text(add_elip);
      }

});


   $("#bell-count").on('click',function(e){
        e.preventDefault();

        let belvalue = $('#bell-count').attr('data-value');

        if(belvalue == ''){

          console.log("inactive");
        }else{
          $(".round").css('display','none');
          $("#list").css('display','block');

          // $('.message').each(function(){
          // var i = $(this).attr("data-id");
          // ids.push(i);

          // });
          //Ajax
          $('.message').click(function(e){
            e.preventDefault();
              $.ajax({
                url:'./connection/deactive.php',
                type:'POST',
                data:{"id":$(this).attr('data-id')},
                success:function(data){

                    console.log(data);
                    location.reload();
                }
            });
        });
     }
   });

   $('#notify').on('click',function(e){
        e.preventDefault();
        var name = $('#notifications_name').val();
        var ins_msg = $('#message').val();
        if($.trim(name).length > 0 && $.trim(ins_msg).length > 0){
          var form_data = $('#frm_data').serialize();
        $.ajax({
          url:'./connection/insert.php',
                type:'POST',
                data:form_data,
                success:function(data){
                    location.reload();
                }
        });
        }else{
          alert("Please Fill All the fields");
        }


   });
});
</script>
</body>

</html>




