
<?php
session_start();
//$user=$_SESSION['name'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//echo $target_file;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//$uploadname="$user.$imageFileType";
//$array=array($uploadname);
//print_r($array);
//$userImg=round(microtime(true)).'.'.end($array);


//echo $userImg;

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    //rename("$target_file","$userImg");
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.".'<br>';
    // $i=0;
    // foreach(glob("*.$user.*") as $myfiles){
    //   $array[$i]=basename($myfiles);
    //   $i=$i+1;
      
    // }
    //$img=$array[count($array)-1];
    //$_SESSION['image']=$img;
    //echo $_SESSION['image'];
    $n=0;
    // while($n<count($array)-1){
    //     unlink($array[$n]);
    //     $n=$n+1;
    // }
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
<!-- <html>
  <img src="<?php echo $img;?>" alt="This is an img" width="20%">
</html> -->
