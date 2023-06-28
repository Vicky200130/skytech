<?php
session_start();
if($_SERVER["REQUEST_METHOD"]="POST"){
    $file=$_FILES["photo"];
    $fileName=$_FILES["photo"]["name"];
    $username=$_SESSION['name'];
    $fileNmaeTmp=$_FILES["photo"]["tmp_name"];
    $fileSize=$_FILES["photo"]["size"];
    $fileType=$_FILES["photo"]["type"];
    $fileError=$_FILES["photo"]["error"];
    $fileExt=explode('.',$fileName);
    $fileActualExt=pathinfo($fileName,PATHINFO_EXTENSION);
    $upload_img_name="$username.$fileActualExt";
    echo $upload_img_name;
    $allowed = array('jpg','jpeg','png');
    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
            if($fileSize<500000){
                $fileNewName= uniqid('',true).".". $fileActualExt;
                echo "success";

            }
        }
    }
    else{
        echo "you can't upload this type of file.";
    }

}
else{
    echo "hi";
} 
?>
