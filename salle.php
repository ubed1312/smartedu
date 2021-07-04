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
    //  @$date_salle = date("Y-m-d H:i:s");
     @$date= $_POST['date_salle'];


    $sql="INSERT INTO sall (nom,prenom,cin,departement,salle,date_salle) VALUES('$nom','$prenom','$cin','$departement','$salle','$date')";
    $result= $con->query($sql);
    header("location:ensei.html");
}

    ?>
