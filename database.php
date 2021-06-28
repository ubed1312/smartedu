<?php

define('HOST','localhost');
define('DB_NAME','siteweb');
define('USER','root');
define('PASS','');

try {
	$db = new PDO("mysql:host=".HOST.";dbname=". DB_NAME, USER, PASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
	echo $e;
}

?>

<!-------------------fpartie Contact.php/html--------------------->

<?php 
// if (isset($_POST['Envoyer'])){
//     extract($_POST);
//     $nom=$_POST['nom'];
//     $prenom=$_POST['prenom'];
//     $mail=$_POST['mail'];  
//     $drone=$_POST['drone'];
//     $msg=$_POST['msg'];


// include 'include/database.php';
// global $db;
// $q = $db -> prepare("INSERT INTO user(nom,prenom,mail,drone,msg) VALUES(:nom,:prenom,:mail,:drone,:msg)");
// $q ->execute([ 'nom' => $nom,
//             'prenom' => $prenom,
//             'mail' => $mail,
//             'drone'=> 'Homme',
//             'msg' => $msg]);
//     }
?> 

