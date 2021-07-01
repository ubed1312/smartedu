<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siteweb";


//connexion au serveur
$con = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['Envoyer'])){



     @$nom = $_POST['nom'];
     @$prenom = $_POST['prenom'];
     @$module = $_POST['module'];
     @$drone = $_POST['drone'];
    //  @$rattrapage = $_POST['rattrapage'];
     @$filiere = $_POST['filiere'];
     @$file = rand(1000,10000)."-".$_FILES["file"]["name"];
     @$tname = $_FILES["files"]["tmp_name"];
     @$uploads_dir = '/images';

     move_uploaded_file($tname,$uploads_dir.'/'.$file);

    $sql="INSERT INTO note (nom,prenom,module,drone,filiere,file) VALUES('$nom','$prenom','$module','$drone','$filiere','$file')";
    $result= $con->query($sql);
    header("location:ensei.html");
}

    ?>
