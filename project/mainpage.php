<?php
session_start();
$user=$_SESSION['name'];

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
    <link rel="stylesheet" href="project.css">
    <title>Sky Tech</title>
    <style>
        .profile-image-box{
            
            width:18vw;
            height:40vh;
            border-radius:50%;
        }
        .image-container{
    
            border:2px black solid;
            background-color:white;
        }
        .profile-description{
            color:white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight:700;
            font-size:24px;
        }
        .profile-description-heading{
            color:white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight:700;

        }


    </style>
</head>

<body>
<div id="Navbar-section">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" class="home-logo">
            <h1 class="navbar-text project-heading">Sky Tech</h1>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contact.html">Support</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="follow-us.html">Follow-Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="show_cart.php" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-cart-dash" viewBox="0 0 16 16">
                    <path d="M6.5 7a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                  </svg></a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="mainpage.php"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg></a>
            </li>
            
            </ul>
            
        </div>
    </nav>
</div>
    
    <?php
        $servername="localhost:3306";
        $username="root";
        $password="";
        $dbname="SKYTECH1";
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        $sql="select * from USER_DATA_1 where name='$user'";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){?>
        <div class="d-flex flex-row justify-content-start bg-secondary p-5 m-5">
            <div class="image-container p-3">    
                <img src="uploads/<?php echo $row['path']?>" alt="" class="profile-image-box">
            </div>
            <div>
                <h1 class="profile-description-heading ml-3">Profile Details</h1>
                <div class="d-flex flex-column justify-content-center ml-5 mt-3 profile-description">
                <p> Name: <?php echo $row['name']?></p>
                <p> Mail: <?php echo $row['mail']?></p>
                <p> Mobile Number: <?php echo $row['mobile_number']?></p>
               <div> 
                    <a href="show_my_details.php"><button class="btn btn-info pl-3 pr-3">My Orders</button></a>
    
                        <a href="show_cart.php"><button class="btn btn-info pl-3 pr-3">Show cart</button></a>
                        <a href="destroy.php"><button class="btn btn-info pl-3 pr-3">Log Out</button></a>
                </div>
                                
                
                

            
                
            </div>
        </div>
        </div>
        <?php }
    ?>
   
    
  
</body>
</html>