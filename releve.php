<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siteweb";


//connexion au serveur
$con = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['Envoyer2'])){



     @$nom = $_POST['nom'];
     @$prenom = $_POST['prenom'];
     @$apogee = $_POST['apogee'];
     @$cne = $_POST['cne'];
     @$mail = $_POST['mail'];
     @$filiere = $_POST['filiere'];


    $sql="INSERT INTO releve (nom,prenom,apogee,cne,mail,filiere) VALUES('$nom','$prenom','$apogee','$cne','$mail','$filiere')";
    $result= $con->query($sql);
    header("location:pricing.html");
}

    ?>
