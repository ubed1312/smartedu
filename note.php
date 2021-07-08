<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siteweb";


//connexion au serveur
$con = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['Envoyer'])){



     @$nom = $_POST['nom'];
     @$prenom = $_POST['prenom'];
     @$module = $_POST['module'];
     @$drone = $_POST['drone'];
    //  @$rattrapage = $_POST['rattrapage'];
     @$filiere = $_POST['filiere'];
         $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];


        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));


        $allowed = array('png', 'jpg', 'jpeg', 'webp', 'gif', 'pdf');
       //Tu fais les vérifications nécéssaires
        if (in_array($fileActualExt, $allowed))
        //Si l'extension n'est pas dans le tableau
        {
            if ($fileError === 0) {

                if ($fileSize < 5000000) {

                    $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                    $fileDestination = 'files/' . $fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);

                    $fileDestination1 = 'files/' . $fileNameNew;



    $sql="INSERT INTO note (nom,prenom,module,drone,filiere,file) VALUES('$nom','$prenom','$module','$drone','$filiere','$fileDestination1')";
    $result= $con->query($sql);

                }}}
    header("location:ensei.html");
}

    ?>
