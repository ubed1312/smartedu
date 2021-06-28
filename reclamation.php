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
     @$apogee = $_POST['apogee'];
     @$cne = $_POST['cne'];
     @$mail = $_POST['mail'];
     @$reclamer = $_POST['reclamer'];


    $sql="INSERT INTO reclamation (nom,prenom,apogee,cne,mail,reclamer) VALUES('$nom','$prenom','$apogee','$cne','$mail','$reclamer')";
    $result= $con->query($sql);
    header("location:pricing.html");
}

    ?>
