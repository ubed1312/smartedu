<?php 

if (isset($_POST['Envoyer'])){
    extract($_POST);
    
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $apogée=$_POST['apogée'];
    $cne=$_POST['cne'];
    $mail=$_POST['mail'];  
    // $drone=$_POST['drone'];
    $filiere=$_POST['filiere'];

    include 'database.php';

global $db;
// $q = $db -> prepare("INSERT INTO user(nom,prenom,mail,drone,msg) VALUES(:nom,:prenom,:mail,:drone,:msg)");
$q = $db -> prepare("INSERT INTO Réclamation(nom,prenom,apogée,cne,mail,filiere) VALUES(:nom,:prenom,:apogée,:cne,:mail,:filiere)");
$q ->execute([ 'nom' => $nom,
            'prenom' => $prenom,
            'apogée' => $apogée,
            'cne' => $cne,
            'mail' => $mail,
            // 'drone'=> 'Homme',
            'filiere' => $filiere
        ]);
    }
    ?>
    
