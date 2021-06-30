<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./owl-carousel/css/owl.theme.default.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Life</title>
</head>

<body>
<div class="bar">
    <h6 class="text-center">Get Free Shipping – Free 30 Day Money Back Guarantee</h6>
</div>
<div id="cart-navbar" class=" ">
    <div class="container">
        <div class="row mt-3">
            <div class="contacts">
                <div class="d-flex">

                    <form action="tel:0743770216">
                        <button type="submit" id="call-btn">Call us</button>
                    </form>
                </div>
            </div>
            <div class="cart d-flex ml-auto">
                <div class="cart-bag">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="cart-item">
                    <span class="cart-items">0</span>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="navbar">
    <!-- Primary Navigation -->
    <nav class="navbar  navbar-expand-lg  container color-second-bg">
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav  mr-auto ml-auto font-rubik">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#abouts-company">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#ourproducts">Our Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacts">Contacts</a>
                </li>

            </ul>

        </div>
    </nav>
    <!-- !Primary Navigation -->
</section>
<section>
    <hr>
    <div class="account-page">
        <div class="container">
            <div class="row">
                <?php
                if(isset($_POST['register-user'])){
                    $sql = "INSERT INTO `users`(`user_id`, `email`, `phone`, `password`) 
                                    VALUES ('null','$email','$phonenumber','$password')";


                }
                ?>
           

                <div class="col-sm-12">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">

                        </div>
                        <form action="" id="LoginForm">
                            <input name="email" type="email" placeholder="Email Address">
                            <input name-="password" type="password" placeholder=" Password ">
                            <button name="login-user" type="submit" class="btn btn-success">Login</button>
                        </form>
                        <form action="" id="RegForm">
                            <input name="email" type="email" placeholder=" Email " required>
                            <input name="phonenumber" type="text" placeholder="  Full Name  "required>
                            <input name="password" type="password" placeholder=" Password" required>
                            <button name="register-user" type="submit" class="btn btn-success">Register</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator  = document.getElementById("Indicator");


    function register() {
        RegForm.style.transform  = "translateX(0px)";
        LoginForm.style.transform  = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
        LoginForm.style.display = "none"
        RegForm.style.display = "block"

    }
    function login() {
        RegForm.style.transform  = "translateX(300px)";
        LoginForm.style.transform  = "translateX(300px)";
        Indicator.style.transform = "translateX(-20px)";
        RegForm.style.display = "none";
        LoginForm.style.display = "block"

    }


</script>


<footer>
    <div class="row p-5">
        <div class="col-sm-3">
            <h2>Super Life</h2>
            <h6>Super Life is a fully loaded organic food store, where you can find the most fresh products. We work
                with proven farmers and certified suppliers who specialize in providing pesticide-free vegetables
                and fruits.
                Superlife cares about clients and guarantees quality</h6>
        </div>
        <div class="col-sm-3">
            <h3 class="text-center">Information</h3>
            <a class="pl-4  ml-5" href="">
                <li>Home</li>
            </a>
            <a class="pl-4  ml-5" href="">
                <li>About Super life</li>
            </a>
            <a class="pl-4  ml-5" href="">
                <li>Our Products</li>
            </a>
            <a class="pl-4  ml-5" href="">
                <li>Contacts us</li>
            </a>
        </div>
        <div class="col-sm-3">
            <h3 class="text-center">Follow us</h3>
            <a class="pl-4 " href="">
                <li>Twitter</li>
            </a>
            <a class="pl-4 " href="">
                <li>Instagram</li>
            </a>
            <a class="pl-4 " href="">
                <li>Facebook</li>
            </a>

        </div>
        <div class="col-sm-3 Contacts">
            <h2>Contacts us</h2>
            <div class="d-flex">
                <div class="icon">
                    <i class="fas fa-map-marked-alt"></i>
                </div>
                <span class="ml-2">
                        Timberland Pane <br>
                        P.o Box 254 Nairobi
                    </span>
            </div>
            <div class="d-flex">
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <span class="ml-2">
                        lulutech@gmail.com
                    </span>
            </div>
            <div class="d-flex">
                <div class="icon">
                    <i class="fas fa-phone-volume"></i>
                </div>
                <span class="ml-2">
                        94934843
                    </span>
            </div>
        </div>

    </div>
</footer>





<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/bootstrap.js"></script>
<script src="./js/index.js"></script>
<script src="./owl-carousel/js/owl.carousel.min.js"></script>

</body>

</html>