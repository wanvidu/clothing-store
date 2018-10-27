<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
            crossorigin="anonymous">
        <link rel="stylesheet" href="css/indexStyle.css">
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
            <a href="">Home</a>
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

        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="./images/adult-attractive-beautiful-289222.jpg">
            </div>

            <div class="mySlides fade">
                <img src="./images/blue-clothing-daylight-953262.jpg">
            </div>

            <div class="mySlides fade">
                <img src="./images/accessories-accessory-business-130855.jpg">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <div class="cat">
            <a href="./products.php?id=women">
                <div>
                    <img src="./images/banner_1.jpg">
                    <span>WOMEN'S</span>
                </div>
            </a>


            <a href="./products.php?id=accessories">
                <div>
                    <img src="./images/banner_2.jpg">
                    <span>ACCESSORIES'S</span>
                </div>
            </a>
            <a href="./products.php?id=men">
                <div>
                    <img src="./images/banner_3.jpg">
                    <span>MEN'S</span>
                </div>
            </a>
        </div>

        <div class="pro-header">
            New Arrivals
        </div>

        <?php

            $con = mysqli_connect("localhost", "root", "", "wad_db");

            if (!$con) {
                die("Cannot connect to DB server");
            }

            $sql ="SELECT `pro_id`, `cat_id`, `pro_name`, `price`, `picture_1`,`updated_at` FROM `wad_product` ORDER BY `updated_at` DESC LIMIT 9;";

            $result = mysqli_query($con, $sql);

            $row = mysqli_fetch_all($result);

            $str="";

            for ($i=0; $i < mysqli_num_rows($result); $i++) {
                $str=$str."<div class='col-3'>
                                <div class='card'>
                                    <a href='./productDescription.php?id=".$row[$i][0]."'>
                                        <img src='".$row[$i][4]."' style='width:100%'>
                                        <h5>".$row[$i][2]."</h5>
                                        <p class='price'>$".$row[$i][3]."</p>
                                    </a>
                                    <a href='./cart.php?id=".$row[$i][0]."&quantity=1'>
                                        <p>
                                            <button>Add to Cart</button>
                                        </p>
                                    </a>
                                </div>
                            </div>";

                if ($i!=0&&$i%3==0) {
                    echo "<div class='pro-row'>".$str."</div>";
                    $str="";
                }
            }

            if ($i==mysqli_num_rows($result)) {
                echo "<div class='pro-row'>".$str."</div>";
            }

        ?>

        <div class="pro-header">
            Best Sellers
        </div>

        <?php

            $con = mysqli_connect("localhost", "root", "", "wad_db");

            if (!$con) {
                die("Cannot connect to DB server");
            }

            $sql ="SELECT `pro_id`, `cat_id`, `pro_name`, `price`, `picture_1`,`updated_at` FROM `wad_product` ORDER BY RAND() LIMIT 4;";

            $result = mysqli_query($con, $sql);

            $row = mysqli_fetch_all($result);

            echo "<div class='pro-row'>";

            for ($i=0; $i < mysqli_num_rows($result); $i++) {
                echo "<div class='col-3'>
                                <div class='card'>
                                    <a href='./productDescription.php?id=".$row[$i][0]."'>
                                        <img src='".$row[$i][4]."' style='width:100%'>
                                        <h5>".$row[$i][2]."</h5>
                                        <p class='price'>$".$row[$i][3]."</p>
                                    </a>
                                    <a href='./cart.php?id=".$row[$i][0]."&quantity=1'>
                                        <p>
                                            <button>Add to Cart</button>
                                        </p>
                                    </a>
                                </div>
                            </div>";
            }

            echo "</div>";

        ?>

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

            function formValidation() {
                var checkList = [
                    validateEmail(),
                    validatePassword()
                ];

                var check = true;

                for (let i = 0; i < checkList.length; i++) {
                    if (!checkList[i]) {
                        check = false;
                        break;
                    }
                }

                if (check) {
                    httpRequest = new XMLHttpRequest();

                    httpRequest.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {

                            console.log(this.responseText);

                            var response = JSON.parse(this.responseText);

                            document.getElementById("status").style.display = "block";

                            if (response.email == "0") {
                                document.getElementById("status").innerHTML = "Enter Correct Email";
                            }
                            if (response.email == "1" && response.email == "0") {
                                document.getElementById("status").innerHTML = "Enter Correct Password";
                            }
                            if (response.email == "1" && response.email == "1") {

                                document.getElementById("myModal").innerHTML =
                                    "<div class='user-content'><div class='user-header'><h2 style='text-align:center;'> Login Successful!</h2><h3 id='txtUserName' style='text-align:center;'></h3><img src='./images/user.png' alt='user' style='display:block; margin:auto; width: 200px; height:200px;'></div></div>";

                                document.getElementById('txtUserName').innerHTML = response.userName

                                var modal = document.getElementById('myModal');

                                window.onclick = function(event) {
                                    if (event.target == modal) {
                                        modal.style.display = "block";
                                    }
                                }

                                setTimeout(function() {
                                    location.reload(true);
                                }, 3000);

                            }
                        }
                    }

                    var email = document.getElementById('email').value;
                    var password = document.getElementById("password").value;

                    var str = "email=" + encodeURIComponent(email) + "&password=" + encodeURIComponent(password);

                    httpRequest.open("POST", "login.php", true);

                    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                    httpRequest.send(str);
                }
            }

            var e = document.getElementsByTagName("small");

            for (let i = 0; i < e.length; i++) {
                e[i].style.display = "none";
            }

            function validateEmail() {
                var email = document.getElementById('email').value;

                if (email == null || email == "" || !(/^\S+@\S+\.\S+$/.test(email))) {
                    e[0].style.display = "block";
                    return false;
                } else {
                    e[0].style.display = "none";
                    return true;
                }
            }

            function validatePassword() {
                var num = document.getElementById("password").value;
                if (num == null || num == "" || !(/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/.test(num))) {
                    e[1].style.display = "block";
                    return false;
                } else {
                    e[1].style.display = "none";
                    return true;
                }
            }

        </script>

        <script src="./js/FontAwesomeAll.js"></script>

    </body>

</html>
