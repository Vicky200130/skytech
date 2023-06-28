
<?php
    session_start();
    $rating=$_POST['rating'];
    $review=$_POST['reviews'];
    $user=$_SESSION['name'];
    date_default_timezone_set("Asia/Calcutta");
    $date=date("y-m-d h:i:s");
    $product=$_GET['product'];
    //echo $product;
    $servername="localhost:3306";
    $username="root";
    $password="";
    $dbname="SKYTECH1";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$review){
        $error="no_review_error";
        echo"please Enter any review to post";
        echo '<a href="review_post_page.html">'.'<button>'.'click here to post'.'</button>'.'</a>';
        
    }else{
   
        //echo"test-1";
        $sql2="insert into reviews values('$product','$user','$rating','$review','$date')";
        
        //echo "test-1.5";
        $result2=mysqli_query($conn,$sql2);
        if($result2){?>
            <h1 class="Meaasage m-5">Your Response Has Been Taken</h1>
       <?php }
        else{?>
            <h1 class="Meaasage m-5">Your Response Has Been Taken</h1>
        <?php }
    }
?>
<style>
    h4{
        color:red;
    }
    .Meaasage{
        font-size:22px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight:700;
    }
</style>
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
    <title>Document</title>
</head>
<body>

    <a href="home.html"><button class="btn btn-info m-5"> Go to mainpage</button></a>
    
</body>
</html>

