<?php
session_start();
$user=$_SESSION['name'];
$servername="localhost:3306";
$username="root";
$password="";
$dbname="SKYTECH1";
$conn=mysqli_connect($servername,$username,$password,$dbname); 
$product=$_GET['product'];
//echo $product;
$sql="delete from cart where user='$user' and product='$product'";

$result=mysqli_query($conn,$sql);
if($result){
    echo "action is performed(deleted from cart)";
    header('location: '.$_SERVER['HTTP_REFERER']);
}

?>
<a href="<?php echo$_SERVER['HTTP_REFERER'];?>"><button>back</button></a>