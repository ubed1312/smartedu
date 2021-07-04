<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siteweb";


//connexion au serveur
$con = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['Envoyer1'])){



    
     @$nom = $_POST['nom'];
     @$prenom = $_POST['prenom'];
     @$cin = $_POST['cin'];
     @$departement = $_POST['departement'];
     @$mail = $_POST['mail'];
     


    $sql="INSERT INTO att_travail (nom,prenom,cin,departement,mail) VALUES('$nom','$prenom','$cin','$departement','$mail')";
    $result= $con->query($sql);
    header("location:ensei.html");
}

    ?>
