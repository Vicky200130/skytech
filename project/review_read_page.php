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
    <style>
        .paragraph{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight:700;
            font-size:28px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
<?php
$servername="localhost:3306";
$username="root";
$password="";
$dbname="SKYTECH1";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$product=$_GET['product'];
//echo $product;
//$sql="create table if not exists $table(user varchar(30),rating int, review varchar(300))";
// $result=mysqli_query($conn,$sql);
// if($result){
    $sql2="select * from reviews where product='$product' order by date desc";
    $result2=mysqli_query($conn,$sql2);
    if(mysqli_num_rows($result2)>0){
        while($row=mysqli_fetch_assoc($result2)){ ?>
        <div class="col-lg-6 mb-4 p-3 shadow bg-white"> <?php

            echo '<h4>'.'<p>'.'User Name : '.$row['user'].'</p>'.'<h4>'.'<p>'.'Rating : '.$row['rating'].' </p>'.'<p>'.'Review : '. $row['review'].'</p>';
        ?>
        </div>
        <?php
        }
    }
    else{
        echo '<p class="paragraph m-5 mb-0">'."no posts yet".'</p>';
    }
// }
?>
<div class="col-lg-12">

        <a href="<?php echo$_SERVER['HTTP_REFERER'];?>"><button class="btn btn-info m-5"style=" width:90px;">back</button></a>
</div>

</div>
</div>

</body>
</html>
