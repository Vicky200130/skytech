<?php
session_start();
$user=$_SESSION['name'];
$product=$_GET['product'];
//echo $name;
$servername="localhost:3306";
$username="root";
$password="";
$dbname="SKYTECH1";
$conn=mysqli_connect($servername,$username,$password,$dbname); 
//$table=$name.'_cart';
//echo $table;
    $sql="select * from cart where user='$user' and product='$product'";
    $result=mysqli_query($conn,$sql);
    if(!mysqli_num_rows($result)>0){
    $sql2="select * from mobile_details where name='$product'";
    $result2=mysqli_query($conn,$sql2);
    while($row=mysqli_fetch_assoc($result2)){
        $productPath=$row['path'];
        echo $productPath;
        $rate=$row['rate'];
        echo $rate;
    }
    $sql3="insert into cart values('$user','$product','$productPath','$rate')";
    $result3=mysqli_query($conn,$sql3);
    echo mysqli_error($result3);
    if($result3){
        header('location: '.$_SERVER['HTTP_REFERER']);
    }
    else{
        echo "not inserted.";
    }
    }
    else{
        header('location: '.$_SERVER['HTTP_REFERER']);

    }

//$lookAlldetails=mysqli_query($conn,$sql);

?>
<!-- <a href="<?php echo$_SERVER['HTTP_REFERER'];?>"><button>back</button></a> -->