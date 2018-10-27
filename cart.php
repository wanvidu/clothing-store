<?php session_start();

if (!isset($_SESSION["userName"])) {
    header('Location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Cart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
            crossorigin="anonymous">
        <link rel="stylesheet" href="css/cartStyle.css">
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
            <a href="./index.php">Home</a>
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
                    <i class="fa fa-fw fa-search"></i>
                </a>
                <a href="#" onclick="showLogin()">
                    <i class="fa fa-fw fa-user"></i>
                </a>
                <a href="./cart.php">
                    <span class="fa-layers">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="fa-layers-counter" style="background:blue;">3</span>
                    </span>
                </a>
            </div>
        </div>

        <div id="myModal" class="modal">

            <div class="user-content">
                <div class="user-header">
                    <span class="close">&times;</span>
                    <h2 style="text-align:center;">Welcome
                        <?php echo $_SESSION["userName"]; ?>!</h2>
                    <img src="./images/user.png" alt="user" style="display:block; margin:auto; width: 200px; height:200px;">
                    <a href="./logout.php" class="user-btn" style="color: white;">
                        <b>Sign Out</b></a>
                </div>
            </div>

        </div>

        <div class="row" style="width:80%; margin:30px auto;">
            <div class="col-12">
                <div class="container">
                    <h4>Cart
                        <span class="price" style="color:black">
                            <i class="fa fa-shopping-cart"></i>
                            <b>4</b>
                        </span>
                    </h4>
                    <p>
                        <a href="#">Product 1</a>
                        <span class="price">$15</span>
                    </p>
                    <p>
                        <a href="#">Product 2</a>
                        <span class="price">$5</span>
                    </p>
                    <p>
                        <a href="#">Product 3</a>
                        <span class="price">$8</span>
                    </p>
                    <p>
                        <a href="#">Product 4</a>
                        <span class="price">$2</span>
                    </p>
                    <hr>
                    <p>Total
                        <span class="price" style="color:black">
                            <b>$30</b>
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <div class="row" style="width:80%; margin:30px auto;">
            <div class="col-7">
                <div class="container">
                    <form action="/action_page.php">

                        <div class="row">
                            <div class="col-6">
                                <h3>Billing Address</h3>
                                <label for="fname">
                                    <i class="fa fa-user"></i> Full Name</label>
                                <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                                <label for="email">
                                    <i class="fa fa-envelope"></i> Email</label>
                                <input type="text" id="email" name="email" placeholder="john@example.com">
                                <label for="adr">
                                    <i class="fa fa-address-card-o"></i> Address</label>
                                <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                                <label for="city">
                                    <i class="fa fa-institution"></i> City</label>
                                <input type="text" id="city" name="city" placeholder="New York">

                                <div class="row">
                                    <div class="col-6">
                                        <label for="state">State</label>
                                        <input type="text" id="state" name="state" placeholder="NY">
                                    </div>
                                    <div class="col-6">
                                        <label for="zip">Zip</label>
                                        <input type="text" id="zip" name="zip" placeholder="10001">
                                    </div>
                                </div>
                            </div>

                            <div class="col-6" style="margin-left:30px;">
                                <h3>Payment</h3>
                                <label for="fname">Accepted Cards</label>
                                <div class="icon-container">
                                    <i class="fab fa-cc-visa" style="color:navy;"></i>
                                    <i class="fab fa-cc-amex" style="color:blue;"></i>
                                    <i class="fab fa-cc-mastercard" style="color:red;"></i>
                                    <i class="fab fa-cc-discover" style="color:orange;"></i>
                                </div>
                                <label for="cname">Name on Card</label>
                                <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                                <label for="ccnum">Credit card number</label>
                                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                                <label for="expmonth">Exp Month</label>
                                <input type="text" id="expmonth" name="expmonth" placeholder="September">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="expyear">Exp Year</label>
                                        <input type="text" id="expyear" name="expyear" placeholder="2018">
                                    </div>
                                    <div class="col-6">
                                        <label for="cvv">CVV</label>
                                        <input type="text" id="cvv" name="cvv" placeholder="352">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <label>
                            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                        </label>
                        <input type="submit" value="Continue to checkout" class="btn">
                    </form>
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
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }

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
