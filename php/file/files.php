
<?php

$targetDir = "rut/";
$fileName = $_POST["name_file"].".pdf";
//echo $fileName."<br>";
$targetFilePath = $targetDir . $fileName;

$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["nameFile"]["tmp_name"], $targetFilePath)){
         
            echo 1;
        }else{
            echo 0;
        }
    }else{
        echo 0; 
    }

?>