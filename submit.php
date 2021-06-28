<!-------------------fpartie Contact.php/html--------------------->

<?php 

if (isset($_POST['Enregistrer'])){
    extract($_POST);
    $id=$_POST['id'];
    $psd=$_POST['psd'];

    include 'database.php';

global $db;
// $q = $db -> prepare("INSERT INTO user(nom,prenom,mail,drone,msg) VALUES(:nom,:prenom,:mail,:drone,:msg)");
$q = $db -> prepare("INSERT INTO submit(id,psd) VALUES(:id,:psd)");
$q ->execute([ 'id' => $id,
            'psd' => $psd]);
    }
    ?>

<!-------------------fpartie Contact.php/html--------------------->