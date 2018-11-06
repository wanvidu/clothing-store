<?php session_start();

if (!isset($_SESSION["userName"])) {
    header('Location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Contact Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
            crossorigin="anonymous">
        <link rel="stylesheet" href="./css/contactUsStyle.css">
    </head>

    <body>

        <div class="hero-image">
            <div class="hero-text">
                <h1>Dress
                    <span>Style</span>
                </h1>
                <p>For Stylish People</p>
            </div>
        </div>

        <div class="navbar">
            <a href="index.php">Home</a>
            <div class="dropdown">
                <button class="dropbtn" onclick="location.href='./products.php?id=all'" type="button">Shop
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <div class="row">
                        <div class="column">
                            <a href="./products.php?id=men">
                                <h3>Men's</h3>
                            </a>
                            <a href="./products.php?id=1">Shirts</a>
                            <a href="./products.php?id=2">T-Shirts</a>
                            <a href="./products.php?id=3">Trousers</a>
                        </div>
                        <div class="column">
                            <a href="./products.php?id=women">
                                <h3>Women's</h3>
                            </a>
                            <a href="./products.php?id=4">Dresses</a>
                            <a href="./products.php?id=5">Tops, Tees & Blouses</a>
                            <a href="./products.php?id=6">Skirts</a>
                        </div>
                        <div class="column">
                            <a href="./products.php?id=accessories">
                                <h3>Accessories</h3>
                            </a>
                            <a href="./products.php?id=7">Shoes</a>
                            <a href="./products.php?id=8">Jewelry</a>
                            <a href="./products.php?id=9">Watches</a>
                            <a href="./products.php?id=10">Handbags & Wallets</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="">Blog</a>
            <a href="./contactUs.php">Contact</a>
            <div class="topnav-right">
                <a href="">
                    <i class="fa fa-fw fa-search" style="font-size:22px;"></i>
                </a>
                <a href="#" onclick="showLogin()">
                    <i class="fa fa-fw fa-user" style="font-size:22px;"></i>
                </a>
                <a href="./cart.php">
                    <div class="fa-1x">
                        <i class="fas fa-shopping-cart" style="font-size:22px;"></i>

                        <span class="fa-layers fa-fw">
                            <i class="fas fa-circle-notch fa-spin" style="color:yellow; font-size:30px;"></i>
                            <span class="fa-layers-text fa-inverse" data-fa-transform="shrink-6 right-4" style="font-weight:900;font-size:22px;">02</span>
                        </span>
                    </div>

                </a>
            </div>
        </div>

        <div id="myModal" class="modal">

            <?php
                if (!isset($_SESSION["userName"])) {
                    echo '<div class="modal-content">
                            <div class="modal-header">
                                <span class="close">&times;</span>
                                <h2>Login or SignUp</h2>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <a href="#" class="fb btn">
                                                    Login with Facebook
                                                </a>
                                                <a href="#" class="twitter btn">
                                                    Login with Twitter
                                                </a>
                                                <a href="#" class="google btn">
                                                    Login with Google+
                                                </a>
                                            </div>
                                            <div class="col">
                                                <input type="text" name="email" id="email" placeholder="Enter Email...">
                                                <small>*Enter Valid Email Address</small>
                                                <input type="password" name="password" id="password" placeholder="Enter Password...">
                                                <small>*Enter Valid Password</small>
                                                <button type="button" id="login" name="btnsubmit" onclick="formValidation()">Login</button>
                                                <small id="status">**</small>
                                            </div>
                                        </div>
                                </div>

                                <div class="bottom-container">
                                    <div class="row">
                                        <div class="col">
                                            <a href="./registration.php" style="color:white" class="btn">Sign up</a>
                                        </div>
                                        <div class="col">
                                            <a href="#" style="color:white" class="btn">Forgot password?</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>';
                } else {
                    echo '<div class="user-content">
                            <div class="user-header">
                                <span class="close">&times;</span>
                                <h2 style="text-align:center;">Welcome '.$_SESSION["userName"].'!</h2>
                                <img src="./images/user.png" alt="user" style="display:block; margin:auto; width: 200px; height:200px;">
                                <a href="logout.php" class="user-btn" style="color: white;">
                                        <b>Sign Out</b></a>
                            </div>
                          </div>';
                }
            ?>

        </div>

        <div style="width: 80%; margin: auto;">
            <h3>Contact Form</h3>

            <div class="container">
                <form method="post" action="processContactUs.php" id="f1">
                    <div>
                        User Name
                    </div>
                    <div style="margin : 1.5vw auto 3vw 3vw;">
                        <b><?php echo $_SESSION['userName'] ?></b>
                    </div>

                    <label for="subject">Say Something</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="display:block; width:90%; margin: 1.5vw auto; height:200px"></textarea>

                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>

        <div class="info-card" style="margin-top:50px;">
            <div class="info-card-body">
                <div class="row">
                    <div class="col-3" style="text-align: center;margin: auto; color: tomato; margin-right:20px;">
                        <i class="fas fa-truck fa-2x"></i>
                    </div>
                    <div class="col-9">
                        <h4>FREE SHIPPING</h4>
                    </div>
                </div>
            </div>
            <div class="info-card-body">
                <div class="row">
                    <div class="col-4" style="text-align: center;margin: auto; color: tomato; margin-right:20px;">
                        <i class="far fa-money-bill-alt fa-2x"></i>
                    </div>
                    <div class="col-8">
                        <h4>CACH ON DELIVERY</h4>
                    </div>
                </div>
            </div>
            <div class="info-card-body">
                <div class="row">
                    <div class="col-3" style="text-align: center;margin: auto; color: tomato; margin-right:20px;">
                        <i class="fab fa-dyalog fa-2x"></i>
                    </div>
                    <div class="col-9">
                        <h4>45 DAYS RETURN</h4>
                    </div>
                </div>
            </div>
            <div class="info-card-body">
                <div class="row">
                    <div class="col-3" style="text-align: center;margin: auto; color: tomato; margin-right:20px;">
                        <i class="far fa-clock fa-2x"></i>
                    </div>
                    <div class="col-9">
                        <h4>OPENING ALL WEEK</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="newsletter">
            <div class="row">
                <div class="col-5">
                    <h2>Newsletter</h2>
                    <p>Subscribe to our newsletter and get 20% off your first purchase</p>
                </div>
                <div class="col-7" style="margin-left:20px;">
                    <form action="">
                        <input type="email" name="" id="" placeholder="Enter Email Address">
                        <input type="submit" value="Submit" style="width:30%;">
                    </form>
                </div>
            </div>
        </div>

        <footer class="footer-distributed">

            <div class="footer-left">

                <h3>Dress
                    <span style="color:tomato">Style</span>
                </h3>

                <p class="footer-links">
                    <a href="./index.php">Home</a>
                    ·
                    <a href="./products.php?id=all">Products</a>
                    ·
                    <a href="./cart.php">Cart</a>
                    ·
                    <a href="#">About</a>
                    ·
                    <a href="#">FAQ</a>
                    ·
                    <a href="./contactUs.php">Contact</a>
                    ·
                    <a href="./PrivacyPolicy.php">Privacy Policy </a>
                </p>

                <p class="footer-company-name">DressStyle &copy; 2017-
                    <?php echo date("Y"); ?>
                </p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker" style="color:tomato"></i>
                    <p>
                        <span>No. 42, First Street </span> Colombo, Sri Lanka</p>
                </div>

                <div>
                    <i class="fa fa-phone" style="color:tomato"></i>
                    <p>+94 11 24 78 587</p>
                </div>

                <div>
                    <i class="fa fa-envelope" style="color:tomato"></i>
                    <p>
                        <a href="mailto:support@dressstyle.com">support@dressstyle.com</a>
                    </p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>About the company</span>
                    DressStyle.
                </p>

                <div class="footer-icons">

                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                </div>

            </div>

        </footer>

        <div class="icon-bar">
            <a href="#" class="facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="twitter">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="google">
                <i class="fab fa-google"></i>
            </a>
            <a href="#" class="linkedin">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#" class="youtube">
                <i class="fab fa-youtube"></i>
            </a>
        </div>

        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

        <script>
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }

            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

            function showLogin() {
                var modal = document.getElementById('myModal');

                var span = document.getElementsByClassName("close")[0];

                modal.style.display = "block";

                span.onclick = function() {
                    modal.style.display = "none";
                }

                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            }

        </script>

        <script src="./js/FontAwesomeAll.js"></script>

    </body>

</html>
