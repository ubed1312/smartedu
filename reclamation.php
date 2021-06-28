<?php 

if (isset($_POST['Envoyer'])){
    extract($_POST);
    
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $apogée=$_POST['apogée'];
    $cne=$_POST['cne'];
    $mail=$_POST['mail'];  
    // $drone=$_POST['drone'];
    $reclamer=$_POST['reclamer'];

    include 'database.php';

global $db;
// $q = $db -> prepare("INSERT INTO user(nom,prenom,mail,drone,msg) VALUES(:nom,:prenom,:mail,:drone,:msg)");
$q = $db -> prepare("INSERT INTO réclamation(nom,prenom,apogée,cne,mail,reclamer) VALUES(:nom,:prenom,:apogée,:cne,:mail,:reclamer)");
$q ->execute([ 'nom' => $nom,
            'prenom' => $prenom,
            'apogée' => $apogée,
            'cne' => $cne,
            'mail' => $mail,
            // 'drone'=> 'Homme',


            'reclamer' => $reclamer
        ]);
    }
    ?>
    
