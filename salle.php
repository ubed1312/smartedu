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
     @$cin = $_POST['cin'];
     @$departement = $_POST['departement'];
     @$salle = $_POST['salle'];


    $sql="INSERT INTO sall (nom,prenom,cin,departement,salle) VALUES('$nom','$prenom','$cin','$departement','$salle')";
    $result= $con->query($sql);
    header("location:ensei.html");
}

    ?>
