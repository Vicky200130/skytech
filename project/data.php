
<?php
session_start();
$target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
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

if ($_FILES["fileToUpload"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    
    $servername="localhost:3306";
    $username="root";
    $password="";
    $dbname="SKYTECH1";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    $img=$_FILES["fileToUpload"]["name"];
    if(!$conn){
        die("connection failed:". mysqli_connect_error());
    }
    if($_SERVER["REQUEST_METHOD"]=='POST'){
        $user_name=mysqli_real_escape_string($conn,$_POST['kname']);
        $user_password=mysqli_real_escape_string($conn,$_POST['pass']);
        $mail=mysqli_real_escape_string($conn,$_POST['uname']);
        $number=mysqli_real_escape_string($conn,$_POST['umob']);
        $sql0="SELECT * FROM USER_DATA_1 WHERE name='$user_name'";
        $result1=mysqli_query($conn,$sql0);
        if(mysqli_num_rows($result1)>0){
            $error= "uerror";
        }
        else{
            $sql="INSERT INTO USER_DATA_1 VALUES('$user_name','$user_password','$mail','$number','$img')";
            $result=mysqli_query($conn,$sql);
        
            if($result){
                echo "Your Register is successfull";
                header("location:project.html");
                
            }
        }
    }
    } 
    else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d1c2ea8b80.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="register.css">

    <title>Register</title>
</head>
<body>
    <div class="background_color">
        <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12 register-box p-5 d-flex flex-column justify-content-center">
            <div class="d-flex flex-row justify-content-center">
                <div class="form_box">
                    <form id="form" method="post" action="data.php" enctype="multipart/form-data" >
                    
                    <input type="text" name="kname" id="kname" placeholder="Enter username" required>
                    <br><br>
                
                    <input type="password" name="pass" id="pass" placeholder="Enter password" required>
                    <br><br>
                    
                    
                    <input type="password" name="pass1" id="pass1" placeholder="Re-Enter Password" required>
                    <br><br>
                
                
                    <input type="text" name="uname" id="uname" placeholder="Enter E-mail ID" required>
                    <br><br>
                    
                
                    
                    <input type="mob" name="umob" id="umob" placeholder="Enter Mobile Number" required>
                    <br><br>

                    <p class="mb-2 text-dark text-bold">Choose Profile Image :<input type="file" name="fileToUpload" id="" placeholder="Choose Profile Image" required class="ml-5 mt-3"></p>
                    <br><br>
                
                    <input type="checkbox" id="agree" required ><label for="agree">Terms and Conditons</label>
                    <br><br>
                    
                    
                    <span id="error"  class="span-box"><?php if($error=='uerror'){echo "User Name Has Already Taken".'<br>'." Try Again With Another Name";}?></span><br>
                    <div class="log-in-button">        
                        <button type="submit" class="btn btn-info log-in-btn" >SUBMIT</button>
                    </div>
                    </form>
                </div>
        </div>
        
        </div>
    </div>  
</div>

        <script>
            let form=document.getElementById("form");
            form.addEventListener("submit",event=>{event.preventDefault();validate();});
            function validate()
            {
                let kname=document.getElementById('kname');
                let uname=document.getElementById("uname");
                let upass=document.getElementById("pass");
                let mpass=document.getElementById("pass1");
                let umob=document.getElementById("umob");
                let uerror=document.getElementById("error"); 
                
                let name=kname.value.trim();
                let pass=upass.value.trim();
                let spass=mpass.value.trim();
                let mob=umob.value.trim();
                let mail=uname.value.trim();
                let pattren=/^([a-z A-Z 0-9]+)@([a-z]+)\.([a-z]{2,3})/;
                let count=0;
                if(mob==" ")
                {
                    uerror.innerText="can't be empty";
                    count++;
                }
                if(mob.length<10)
                {
                    uerror.innerText="mobileno must be 10 digts";
                    count++;
                }
                if(!mob.match(/^[6-9]{1}/))
                {
                    uerror.innerText="must be start 6-9 digit";
                    count++;
                }
                if(!mob.match(/[0-9]/))
                {
                    uerror.innerText="Enter mobile number should be 10 digits";
                    count++;
                }
                if(mob.match(/[a-z A-Z]/))
                {
                    uerror.innerText="numbers only";
                    count++;
                }
                if(!mail.match(pattren))
                {
                    uerror.innerText="enter valid mail id";
                    count++;
                }
                if(!isNaN(mail))
                {
                    uerror.innerText='Please enter mail id';
                    count++;
                }
                
                if(pass!=spass)
                {
                    uerror.innerText="confirm password not same";
                    count++;
                }
                if(!isNaN(spass))
                {
                    uerror.innerText='Please enter confirm password';
                    count++;
                }
                if(!pass.match(/[A-Z a-z]/))
                {
                    uerror.innerText="Password atleast one uppercase and lowercase letter";
                    count++;
                }
                if(!pass.match(/[0-9]/))
                {
                    uerror.innerText="Password sholud contain numbers ";
                    count++;
                }
                if(!pass.match(/[@ \. _]/))
                {
                    uerror.innerText="Password sholud contain special charactor ";
                    count++;
                }
                if(pass.length<8)
                {
                    uerror.innerText="password shoud be 8 Alphanumeric letters";
                    count++;
                }
                if(name.length<3)
                {
                    uerror.innerText='should be atleast 3 charecters';
                    count++;
                }
                if(!isNaN(name))
                {
                    uerror.innerText='Please enter User name';
                    count++;
                }
                
                if(count==0)
                {
                    form.submit();
                }
            }
        </script>
</html>