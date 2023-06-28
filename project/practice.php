<?php
session_start();
   $_SESSION['pagename']=$_SERVER['PHP_SELF'];
   date_default_timezone_set("Asia/Calcutta");
   echo $_SESSION['pagename'];
   $date=date("y-m-d h:i:s");
   echo $date;
   //$path=$_GET['mobilename'];
   //echo $path;
   // if(isset($_SESSION['pagename'])){
      
   //    unset($_SESSION['pagename']);
   //    echo "removed";
   // }
   //header('location: '.$_SERVER['HTTP_REFERER']);
   //echo $_SESSION['pagename'];
    


?>
<!-- <!DOCTYPE html>
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
<button type="button" class="btn btn-default" oncliclk="javascript:history.go(-1)">back</button>
</body>
</html> -->