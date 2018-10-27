<?php session_start();

if (!isset($_SESSION["userName"])) {
    header('Location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Products</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
            crossorigin="anonymous">
        <link rel="stylesheet" href="css/productsStyle.css">
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

        <?php
            $con = mysqli_connect("localhost", "root", "", "wad_db");

            if (!$con) {
                die("Cannot connect to DB server");
            }

            $id=$_GET['id'];

            if ($id=="all") {
                $sql ="SELECT `pro_id`, `cat_id`, `pro_name`, `price`, `picture_1` FROM `wad_product` ORDER BY RAND();";
                $path=$heading="All Products";
            } elseif ($id=="men") {
                $sql ="SELECT `pro_id`, `cat_id`, `pro_name`, `price`, `picture_1` FROM `wad_product` WHERE `cat_id`='1' OR `cat_id`='2' OR `cat_id`='3' ORDER BY RAND();";
                $path=$heading="Men's";
            } elseif ($id=="women") {
                $sql ="SELECT `pro_id`, `cat_id`, `pro_name`, `price`, `picture_1` FROM `wad_product` WHERE `cat_id`='4' OR `cat_id`='5' OR `cat_id`='6' ORDER BY RAND();";
                $path=$heading="Women's";
            } elseif ($id=="accessories") {
                $sql ="SELECT `pro_id`, `cat_id`, `pro_name`, `price`, `picture_1` FROM `wad_product` WHERE `cat_id`='7' OR `cat_id`='8' OR `cat_id`='9'  OR `cat_id`='10' ORDER BY RAND();";
                $path=$heading="Accessories";
            } else {
                $sql ="SELECT `cat_id`, `name` FROM `wad_categories` WHERE `cat_id`='".$id."'";

                $result = mysqli_query($con, $sql);

                $row = mysqli_fetch_all($result);

                $path=$heading=$row[0][1];

                $sql ="SELECT `pro_id`, `cat_id`, `pro_name`, `price`, `picture_1` FROM `wad_product` WHERE `cat_id`='".$id."'  ORDER BY RAND();";
            }
        ?>

        <div>
            <h4>Home >
                <?php echo $path ?>
            </h4>
        </div>

        <div class="pro-header">
            <?php echo $heading ?>
        </div>

        <?php

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

            if (mysqli_num_rows($result)==0) {
                echo '<h3 style="text-align:center">No Products Found.</h3>';
            }

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

        </script>

        <script src="./js/FontAwesomeAll.js"></script>

    </body>

</html>
