<!-- <?php
//$name=$_SESSION['name'];
$servername='localhost:3306';
$username='root';
$password='';
$dbname='SKYTECH';
$conn=mysqli_connect($servername,$username,$password,$dbname);
$thing=$_GET['product'];
$sql="select * from learnmore where product='$thing'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    $product_img_path=$row['product_img_path'];
    $product=$row['product'];
    $product_name=$row['product_name'];
    $present_rate=$row['present_rate'];
    $past_rate=$row['past_rate'];
    $howmuch_off=$row['howmuch_off'];
    $first_offer=$row['first_offer'];
    $second_offer=$row['second_offer'];
    $third_offer=$row['third_offer'];
    $fourth_offer=$row['fourth_offer'];
    $brand_img_path=$row['brand_img_path'];
    $warrenty=$row['warrenty'];
    $first_heighlight=$row['first_heighlight'];
    $second_heighlight=$row['second_heighlight'];
    $third_heighlight=$row['third_heighlight'];
    $fourth_heighlight=$row['fourth_heighlight'];
    $fifth_heighlight=$row['fifth_heighlight'];
    $description=$row['description'];
    $p_description1_img=$row['p_description1_img'];
    $p_description1_heading=$row['p_description1_heading'];
    $p_description1=$row['p_description1'];
    $p_description2_img=$row['p_description2_img'];
    $p_description2_heading=$row['p_description2_heading'];
    $p_description2=$row['p_description2'];
    $p_description3_img=$row['p_description3_img'];
    $p_description3_heading=$row['p_description3_heading'];
    $p_description3=$row['p_description3'];
    $p_description4_img=$row['p_description4_img'];
    $p_description4_heading=$row['p_description4_heading'];
    $p_description4=$row['p_description4'];
    $p_description5_img=$row['p_description5_img'];
    $p_description5_heading=$row['p_description5_heading'];
    $p_description5=$row['p_description5'];
    $p_description6_img=$row['p_description6_img'];
    $p_description6_heading=$row['p_description6_heading'];
    $p_description6=$row['p_description6'];

    
}
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d1c2ea8b80.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="learn.css">
    <link rel="stylesheet" href="project.css">
</head>
<body>
    <div id="Navbar-section">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Products
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Mobiles</a>
                <a class="dropdown-item" href="#">Laptops</a>
                <a class="dropdown-item" href="#">Tech-Blogs</a>
                <a class="dropdown-item" href="#">Tech-Books</a>

                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">E-Store</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Support</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">EXplore-More</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Follow-Us</a>
            </li>
            
            </ul>
            
        </div>
        </nav>
    </div>
    <div id="learn_more_section ">
        <div class="container-fluid">
            <div class="row">
                <div class="d-none d-lg-block  col-lg-5 fixed_box shadow split ">
                    <div class="p-3 shadow ">

                    <div class="d-flex flex-row justify-content-center">
                        <img  src="<?php if($product_img_path!=NULL){echo $product_img_path;}?>" class="side-image mb-3" />
                    </div>
                        <div class="mt-5 d-flex flex-row justify-content-center">
                            <a href="order_product.php?product=<?php if($product!=NULL){echo $product;}?>"><button class="btn btn-info learn-more-buttons mr-5">BUY NOW</button></a>
                            <a href="add_to_cart.php?product=<?php if($product!=NULL){echo $product;}?>"><button class="btn btn-info learn-more-buttons ml-5">ADD TO CART</button></a>
    
                        </div>


                    </div>

                </div>
                <div class="d-lg-none d-block col-12 p-4 shadow ">
                    <div class="p-3 shadow ">

                    <div class="d-flex flex-row justify-content-center">
                        <img  src="img/vivo-img/vivo-X80-pro.jpg" class="w-100 mb-3"/>
                    </div>
                        <div class="mt-5 d-flex flex-row justify-content-center">
                            <a href="#"><button class="btn btn-info learn-more-buttons mr-5">Reviews</button></a>
                            <button class="btn btn-info learn-more-buttons ml-5">Rate</button>
    
                        </div>


                    </div>

                </div>
                <div class="col-12 col-lg-5">
                   
                </div>
                <div class="col-lg-7 p-3">
                    <h1 class="brand-name">
                        <?php if($product_name!=NULL){echo $product_name;}?>
                    </h1>
                    <span class="brand-offer-price mr-2">
                        <?php if($present_rate!=NULL){echo $present_rate;}?>
                    </span>

                    <span  class="brand-actual-price mr-2">
                        <?php if($past_rate!=NULL){echo $past_rate;}?>
                    </span>
                    <span class="badge bg-success mr-2 p-2 text-light"><?php if($howmuch_off!=NULL){echo $howmuch_off;}?> off</span>
                    <div class="offers-space">
                    <table class="mt-3">
                        <tr>
                            <th colspan="2">Offers Avilable</th>
                        </tr>
                        <tr>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag" viewBox="0 0 16 16">
                                <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/>
                                <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z"/>
                                </svg>
                            </td>
                            <td>
                                <p class="mt-3"><?php if($first_offer!=NULL){echo $first_offer;}?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag" viewBox="0 0 16 16">
                                <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/>
                                <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z"/>
                                </svg>
                            </td>
                            <td>
                                <p class="mt-3"><?php if($second_offer!=NULL){echo $second_offer;}?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag" viewBox="0 0 16 16">
                                <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/>
                                <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z"/>
                                </svg>
                            </td>
                            <td>
                                <p class="mt-3"><?php if($third_offer!=NULL){echo $third_offer;}?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag" viewBox="0 0 16 16">
                                <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/>
                                <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z"/>
                                </svg>
                            </td>
                            <td>
                                <p class="mt-3"><?php if($fourth_offer!=NULL){echo $fourth_offer;}?></p>
                            </td>
                        </tr>
                        
                    </table>
                    <div >
                        <img src="<?php if($brand_img_path!=NULL){echo $brand_img_path;}?>" class="brand-logo">
                        <span class="ml-2"><?php $warrenty;?></span>
                    </div>
                    <table class="mt-5">
                        <tr>
                            <td colspan="5" class="d-flex flex-coloum justify-content-start table_heading mr-2">
                                Highlights
                            </td>
                            <td>
                                <ul>
                                   <?php if($first_heighlight!=NULL){?><li><?php if($first_heighlight!=NULL){echo $first_heighlight;}?></li><?php;}?>
                                    <li><?php if($second_heighlight!=NULL){echo $second_heighlight;}?></li>
                                    <li><?php if($third_heighlight!=NULL){echo $third_heighlight;}?></li>
                                    <li><?php if($fourth_heighlight!=NULL){echo $fourth_heighlight;}?></li>
                                    <li><?php if($fifth_heighlight!=NULL){echo $fifth_heighlight;}?></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                    <table class="mt-5">
                        <tr>
                            <td colspan="5" class="d-flex flex-coloum justify-content-start table_heading mr-2">
                                Easy EMI Payments
                            </td>
                            <td>
                                <ul>
                                    <li>7 Days Replacement Policy</li>
                                    <li>GST invoice available</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                    <table class="mt-5">
                        <tr>
                            <td colspan="5" class="d-flex flex-coloum justify-content-start table_heading mr-2">
                                Description
                            </td>
                            <td>
                                <p class="paragraph-description ml-5"><?php if($description!=NULL){echo $description;}?></p>
                            </td>
                        </tr>
                    </table>
                    <h1 class="pd-heading ml-5 mt-5">Product Description</h1>
                </div>
            </div>
            
            
            <div class="container">
                
            
                <div class="row shadow mb-4 d-flex">
                        <div class="d-none col-1 d-lg-block col-lg-5 order-1">

                        </div>
                        <div class="col-4 col-lg-2 p-3 order-2 ">
                            <img src="<?php if($p_description1_img!=NULL){echo $p_description1_img;}?> " class="w-100">
                        </div>
                        <div class="col-7 col-lg-5 p-3 order-3">
                            <div class="order-2">
                                <h1 class="pd-card-heading">
                                <?php if($p_description1_heading!=NULL){echo $p_description1_heading;}?>
                                </h1>
                                <p class="pd-card-description">
                                    <?php if($p_description1!=NULL){echo $p_description1;}?>
                                </p>
                            </div>


                        </div>
                        
                </div>
                <div class="row shadow mb-4 d-flex">
                    <div class="d-none d-lg-block col-lg-5 order-1">

                    </div>
                    <div class="col-4 col-lg-2 p-3 order-3">
                        <img src="<?php if($p_description2_img!=NULL){echo $p_description2_img;}?> " class="w-100">
                    </div>
                    <div class="col-7 col-lg-5 p-3 order-2">
                        <div class="order-2">
                            <h1 class="pd-card-heading">
                            <?php if($p_description2_heading!=NULL){echo $p_description2_heading;}?>
                            </h1>
                            <p class="pd-card-description">
                                <?php if($p_description2!=NULL){echo $p_description2;}?>
                            </p>
                        </div>


                    </div>
                    
                </div>
                <div class="row shadow mb-4 d-flex">
                    <div class="d-none col-1 d-lg-block col-lg-5 order-1">

                    </div>
                    <div class="col-4 col-lg-2 p-3 order-2 ">
                        <img src="<?php if($p_description3_img!=NULL){echo $p_description3_img;}?> " class="w-100">
                    </div>
                    <div class="col-7 col-lg-5 p-3 order-3">
                        <div class="order-2">
                            <h1 class="pd-card-heading">
                            <?php if($p_description3_heading!=NULL){echo $p_description3_heading;}?>
                            </h1>
                            <p class="pd-card-description">
                                <?php if($p_description3!=NULL){echo $p_description3;}?>
                        </div>


                    </div>
                    
            </div>
            <div class="row shadow mb-4 d-flex">
                <div class="d-none d-lg-block col-lg-5 order-1">

                </div>
                <div class="col-4 col-lg-2 p-3 order-3">
                    <img src="<?php if($p_description4_img!=NULL){echo $p_description4_img;}?> " class="w-100">
                </div>
                <div class="col-7 col-lg-5 p-3 order-2">
                    <div class="order-2">
                        <h1 class="pd-card-heading">
                        <?php if($p_description4_heading!=NULL){echo $p_description4_heading;}?>
                        </h1>
                        <p class="pd-card-description">
                            <?php if($p_description4!=NULL){echo $p_description4;}?>
                        </p>
                    </div>


                </div>
                
            </div>
            <div class="row shadow mb-4 d-flex">
                <div class="d-none col-1 d-lg-block col-lg-5 order-1">

                </div>
                <div class="col-4 col-lg-2 p-3 order-2 ">
                    <img src="<?php if($p_description5_img!=NULL){echo $p_description5_img;}?> " class="w-100">
                </div>
                <div class="col-7 col-lg-5 p-3 order-3">
                    <div class="order-2">
                        <h1 class="pd-card-heading">
                        <?php if($p_description4_heading!=NULL){echo $p_description4_heading;}?>
                        </h1>
                        <p class="pd-card-description">
                            <?php if($p_description5!=NULL){echo $p_description5;}?>
                        </p>
                    </div>


                </div>
                
            </div>
            <div class="row shadow mb-4 d-flex">
                <div class="d-none d-lg-block col-lg-5 order-1">

            </div>
            <div class="col-4 col-lg-2 p-3 order-3">
                <img src="<?php if($p_description6_img!=NULL){echo $p_description6_img;}?> " class="w-100">
            </div>
            <div class="col-7 col-lg-5 p-3 order-2">
                <div class="order-2">
                    <h1 class="pd-card-heading">
                    <?php if($p_description6_heading!=NULL){echo $p_description6_heading;}?>
                    </h1>
                    <p class="pd-card-description">
                        <?php if($p_description6!=NULL){echo $p_description6;}?>
                    </p>
                </div>


            </div>
            


            </div>
            <div class="row  mb-5 d-flex">
                <div class="d-none d-lg-block col-lg-5 order-1">

            </div>
            <div class="d-none col-lg-7 p-3 order-2 d-flex flex-row justify-content-center">
                <a href="review_read_page.php?mobilename=<?php if($product!=NULL){echo $product;}?>"><button class="btn btn-info learn-more-buttons mr-5">Reviews</button></a>
                <a href="review_post_page1.php?mobilename=<?php if($product!=NULL){echo $product;}?>"><button class="btn btn-info learn-more-buttons ml-5">Rate Product</button></a>
            </div>
        </div>
            </div>
        
        
        </div>
        
        </div>
    </div>
</body>
</html>