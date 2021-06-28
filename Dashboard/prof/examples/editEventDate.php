<?php

// Connexion à la base de données
require_once('bdd.php');
require_once('dbconnection.php');

session_start(); 

$servername="localhost";
$username="root";
$password="";
$dbname="pfe";

$con=mysqli_connect($servername,$username,$password,$dbname);

    
$id = mysqli_real_escape_string($con,$_SESSION['Email5']);



$sql = "SELECT * FROM listeprof where Email='$id'";
$result =$con->query($sql);

$row = mysqli_fetch_array($result);


$id2 = $row['ID'];



if (isset($_POST['Event'][0]) && isset($_POST['Event'][1]) && isset($_POST['Event'][2])){
	
	
	$id = $_POST['Event'][0];
	$start = $_POST['Event'][1];
	$end = $_POST['Event'][2];



	$sql0 = "SELECT events.start , events.end , events.ID , listeprof.ID  FROM events
	INNER JOIN listeprof ON events.ID = listeprof.ID where events.start = '$start' and events.end = '$end' and events.ID = '$id2' ";
	$result = $con->query($sql0);

	if ($result->num_rows > 0 ) {
		print_r($bdd->errorInfo());
		die ('Erreur');
		
	   }
	   
	   else{

	$sql = "UPDATE events SET  start = '$start', end = '$end' WHERE ID1 = $id ";

	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}else{
		die ('OK');
	}

}
}
//header('Location: '.$_SERVER['HTTP_REFERER']);

	
?>