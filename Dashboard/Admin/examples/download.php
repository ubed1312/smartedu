<?php
if(!empty($_GET['file'])){
    $fileName  = basename($_GET['file']);
    $filePath  = "../../../files/".$fileName;

    if(!empty($fileName) && file_exists($filePath)){
        //define header
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; file=$fileName");
        header("Content-Type: application/pdf");
        header("Content-Transfer-Encoding: binary");

        //read file
        readfile($filePath);
        exit;
    }
    else{
        echo "file not exit";
    }
}

