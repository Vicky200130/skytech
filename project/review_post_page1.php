<?php
$product=$_GET['product'];
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
    <title>Document</title>
    <style>
        select{
            width:30%;
        }
        .form-box{
            
            padding:30vh;
            padding-top:10vh;
            padding-bottom:0vh;
        }
        .button{
            width:95px;
        }
        .heading{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight:700;

        }
        .paragraph{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight:700;
        }
        .Form-box{
            background-color:whitesmoke;
            border:cyan solid 3px;
            border-radius:25px;
        }
    </style>
</head>
<body class="d-flex flex-column justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto form-box">
            <div class="Form-box p-5 shadow">
                <h1 class="text-dark heading mb-3">Review Our Product</h1>
                <form action="review_post_page.php?product=<?php echo $product;?>" method="post">


                        <p><span class="paragraph">Enter your Rating:<span><br>
                        <select name="rating" id="rating">
                            <option value="1"></option>
                            <option value="1" id="1">1</option>
                            <option value="2" id="2">2</option>
                            <option value="3" id="3">3</option>
                            <option value="4" id="4">4</option>
                            <option value="5" id="5">5</option>
                        </select></p><br><br>
                        <p><span class="paragraph">Reviews:<span><br>
                        <textarea name="reviews" id="reviews" cols="40" rows="5"></textarea></p>
                    <button type="submit" class="btn btn-info button mb-4">POST</button>

                </form>
                <a href="<?php echo$_SERVER['HTTP_REFERER'];?>"><button class="btn btn-info button">BACK</button></a>

            </div>




            </div>
            
        </div>
    
    </div>
</body>
</html>