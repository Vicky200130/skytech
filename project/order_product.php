<?php
$product=$_GET['product'];
//echo $product;
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
    <link rel="stylesheet" href="book_product.css">
    <title>Document</title>
</head>
<body>
    <div class="page-box pt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center"> 
                <div class="form-box d-flex flex-row justify-content-center">
                    <div>
                    <form action="book_product.php?product=<?php echo $product; ?>" method="post">
                        <input type="number" name="mobileNumber" id="mobileNumber" pattren="[0-9]{10}" placeholder="Enter Alternative Mobile Number"><br><hr>
                        <p>Address Details:</p>
                        <input type="text" name="town" id="town" required placeholder="Town Name"><br><br>
                        <input type="text" name="village" id="village" required placeholder="Village"><br><br>
                        <input type="number" name="pin" id="pin" pattren="[0-9]{6}" required placeholder="PIN"><br><br>
                        <input type="text" name="state" id="state" placeholder="State"><br><br>
                        <button type="submit" class="btn btn-info">Place Order</button>
                        <br><br>
                    </form>
                    <a href="home.html" ><button class="btn btn-warning text-white">Do Not Order</button></a>
                    </div>
            </div>

            </div>
        </div>
    </div>
    </div>
</body>
</html>