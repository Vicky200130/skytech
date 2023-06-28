<?php
$servername="localhost:3306";
$username="root";
$password="";
$dbname="SKYTECH1";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($_SERVER['REQUEST_METHOD']=='POST'){
    $mobilename=$_POST['mobilename'];
    echo $mobilename;
    $path=$_POST['path'];
    echo $path;
    $rate=$_POST['rate'];
    $sql="insert into mobile_details values('$mobilename','$path','$rate')";
    $result=mysqli_query($conn,$sql);
    echo 'error:'. mysqli_error($result);
    if($result){
        echo "details taken";
        header('location: mobile_details.html');
    }
    else{
        echo 'test not passsed.';
    }
}
?>