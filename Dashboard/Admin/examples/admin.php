<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
  Administration
  </title>

  <link href="../../dist/img/fsjes.png" rel="shortcut icon" />
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="login_admin/assets/css/login.css">
</head>

<body>

  <?php 


if(isset($_POST['Envoyer']))
{

session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="siteweb";

$con=mysqli_connect($servername,$username,$password,$dbname);


 $value1 = $_POST['username'];
 $value2 = $_POST['pass'];     


        $sql = "SELECT * from admin where Email = '$value1' and Password = '$value2'"; 
        $result = $con->query($sql); 


        if($result->num_rows > 0) {

             
                $_SESSION['Email']=$result;

                $_SESSION['Email6']= $value1;

                header("location: test.php");
                

            }     
        else{  
            
            
echo  '


<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
       <script type="text/javascript">   

                $(document).ready(function(){

                 
                  
                  swal({
                    icon: "error",
                    title: "Oops...",
                    text: "Email Or Mot De Passe Invalid!",
                  })
                });
              </script>
';
    
           
        } 
    }
           
?>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="login_admin/assets/images/login1.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
              </div>
              <p class="login-card-description">Sign into your account</p>
              <form action = "" onsubmit = "return validation()" method = "POST">
                <div class="form-group">
                  <label for="email" class="sr-only">Email</label>
                  <input type="email" id="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email address"  name="username" required>
                </div>
                <div class="form-group mb-4">
                  <label for="password" class="sr-only">Password</label>
                  <input type="password" id="password" class="form-control"  placeholder="Mot de passe" name="pass" required>
                
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="Envoyer">Connecter</button>

              
             <br>  <input type="checkbox" onclick="myFunction()">
             <label for="remember">
                Afficher Mot de passe
              </label><br><br>
            
            </form>
              <center> <a href="../../../index.php">Retour à l'accueil</a>
              </center>
            </div>
          </div>
        </div>
      </div>


    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <script>
    function myFunction() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>
  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
</body>

</html>