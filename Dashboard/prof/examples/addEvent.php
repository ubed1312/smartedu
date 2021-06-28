<?php

// Connexion à la base de données
require_once('bdd.php');
require_once('dbconnection.php');
//echo $_POST['title'];


$id = mysqli_real_escape_string($con,$_SESSION['Email5']);



    $sql2 = "SELECT * FROM listeprof where Email='$id'";
    $result2 =$con->query($sql2);

    $row2 = mysqli_fetch_array($result2);
	
	$id2 = $row2['ID'];


if(isset($_POST['Ajouter']))  {
	
	$title = $_POST['titre'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$color = $_POST['color'];


	$sql0 = "SELECT * FROM events where start = '$start' OR end = '$end'";
	$result = $con->query($sql0);


	if ($result->num_rows > 0) {
		

		echo '<script language="javascript">';
        echo 'alert("Erreur")';
        echo '</script>';
		
	   }
	   else{

	  
	$sql = "INSERT INTO events(ID,title, color, start, end) values ('$id2','$title', '$color', '$start', '$end')";
	//$req = $bdd->prepare($sql);
	//$req->execute();
	
	echo $sql;
	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}

}
}

header("refresh: 0; url=calendar.php "); 
	
?>
