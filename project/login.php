<?php
session_start();
$servername="localhost:3306";
$username="root";
$password="";
$dbname="SKYTECH1";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connection failed:". mysqli_connect_error());
}
if($_SERVER["REQUEST_METHOD"]='POST'){
    $user_name=mysqli_real_escape_string($conn,$_POST['user_id']);
    $user_password=mysqli_real_escape_string($conn,$_POST['password']);
    $_SESSION['name']=$user_name;
    

    $sql="SELECT * FROM USER_DATA_1 WHERE name='$user_name' AND password='$user_password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        header('location: home.html');
        echo "user name is: ". $_SESSION['name'];
    }
    else{
        // echo 'enter user name and password';
        $error="uerror";
        // header('location: project.html');
        
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>login page</title>
  <link rel="stylesheet" href="login.css">
</head>

<body>

  <div class="background_color p-2">

  <div class="log-in-background-image-container d-flex flex-column justify-content-center shadow">
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4  d-flex d-none d-lg-block">

        </div>
        <div class="col-lg-4 col-12 d-none d-lg-block">
          <div class="log-in-box shadow p-5 bg-white ">
            <h1 class="brand-name">Sky Tech</h1>
            <form action="login.php" method="post" class="form-floating">
            <?php
                if($error =="uerror"){
                    echo "Enter username or password correctly".'<br>';               
                 }
              ?>
              <input type="text" name="user_id" id="user_id" placeholder="User name"><br>
              <input type="password" name="password" id="password" placeholder="Password"><br>
              <div class="log-in-button">
                <button type="submit" class="btn btn-info log-in-btn">Login</button>
              </div>
              
            </form>
              <p class="signup-text mt-3">Don't have an Account <a href="register.html" class="signup-link">Signup</a></p>
          </div>
        </div>
        <div class="col-lg-4 col-12 d-block d-lg-none ">
          <div class="log-in-box shadow p-5 bg-white ">
            <h1 class="brand-name">Sky Tech</h1>
            <form action="login.php" method="post" class="form-floating">
              <div class="d-flex flex-column justify-content-center">
                <input type="text" name="user_id" id="user_id" placeholder="User name"><br>
                <input type="password" name="password" id="password" placeholder="Password"><br>
              </div>
              <div class="log-in-button">
                <button type="submit" class="btn btn-info log-in-btn">Login</button>
              </div>
              
            </form>
              <p class="signup-text mt-3">Don't have an Account <a href="register.html" class="signup-link">Signup</a></p>
          </div>
        </div>
      </div> 
    </div>    
  </div>
  </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>