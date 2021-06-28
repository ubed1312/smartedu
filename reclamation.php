<?php 

$servename="localhost";
$username="root";
$password="";
$dbname="siteweb";

$con = mysqli_connect($servename,$username,$password,$dbname);

if(isset($_POST['Envoyer'])){

  @nom = $_POST['nom'];
  @prenom = $_POST['prenom'];
  @apogée = $_POST['apogée'];
  @cne = $_POST['cne'];
  @mail = $_POST['mail'];
  @reclamer = $_POST['reclamer'];


    $sql="INSERT INTO reclamation (nom,prenom,apogée,cne,mail,reclamer) VALUES('$nom','$prenom','$apogée','$cne','$mail','$reclamer')";
    $result= $con->query($sql);
    header("location:pricing.html");
}

    ?>