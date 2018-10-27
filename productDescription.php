<?php session_start();

if (!isset($_SESSION["userName"])) {
    header('Location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Product Description</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
            crossorigin="anonymous">
        <link rel="stylesheet" href="css/productDescriptionStyle.css">
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

            $sql = "SELECT `pro_id`, c.name AS 'cat_name', `pro_name`, `description`, `price`, `picture_1`, `picture_2`, `picture_3` FROM `wad_product` p, `wad_categories` c WHERE p.cat_id = c.cat_id AND `pro_id`='".$id."'";

            $result = mysqli_query($con, $sql);

            $row = mysqli_fetch_all($result);

            $path=$row[0][1];
        ?>

        <div class="container-box">
            <div>
                <h4>Home >
                    <?php echo $path ?>
                </h4>
            </div>

            <div class="row">
                <div class="col-1">
                    <?php
                        if ((string)$row[0][5]!="") {
                            $p1=substr((string)$row[0][5], 2);

                            echo '<img src="'.$p1.'" alt="" style="width:100px;" onclick="setPicture1()">';

                            echo '<script>
                                function setPicture1(){
                                    document.getElementById("img-box").src="'.$p1.'";
                                }
                            </script>';
                        }
                        if ((string)$row[0][6]!="") {
                            $p2=substr((string)$row[0][6], 2);

                            echo '<img src="'.$p2.'" alt="" style="width:100px;" onclick="setPicture2()">';

                            echo '<script>
                                function setPicture2(){
                                    document.getElementById("img-box").src="'.$p2.'";
                                }
                            </script>';
                        }
                        if ((string)$row[0][7]!="") {
                            $p3=substr((string)$row[0][7], 2);

                            echo '<img src="'.$p3.'" alt="" style="width:100px;" onclick="setPicture3()">';

                            echo '<script>
                                function setPicture3(){
                                    document.getElementById("img-box").src="'.$p3.'";
                                }
                            </script>';
                        }
                    ?>


                </div>

                <div class="col-4" style="margin:0 15px">
                    <img id="img-box" src="<?php echo $p1 ?>" width="100%">
                </div>



                <div class="col-7">
                    <h1>
                        <?php echo $row[0][2] ?>
                    </h1>
                    <p>
                        <?php echo $row[0][3] ?>
                    </p>
                    <div class="box">
                        <i class="fas fa-truck" style="color:tomato;"></i>
                        Free Delivery
                    </div>
                    <div class="original-price">
                        <?php echo $row[0][4] ?>
                    </div>
                    <div class="row" style="margin:20px 0">
                        <div class="col-3 new-price">
                            <?php echo $row[0][4] ?>
                        </div>
                        <div class="col-9">
                            <i class="fas fa-star" style="color:tomato;"></i>
                            <i class="fas fa-star" style="color:tomato;"></i>
                            <i class="fas fa-star" style="color:tomato;"></i>
                            <i class="fas fa-star" style="color:tomato;"></i>
                            <i class="far fa-star" style="color:tomato;"></i>
                        </div>
                    </div>
                    <div class="row" style="margin:20px 0">
                        <div class="col-3">
                            Select Color :
                        </div>
                        <div class="col-1">
                            <div class="dot" style="background-color:red"></div>
                        </div>
                        <div class="col-1">
                            <div class="dot" style="background-color:green"></div>
                        </div>
                        <div class="col-1">
                            <div class="dot" style="background-color:blue"></div>
                        </div>
                    </div>
                    <div class="row" style="margin:20px 0">
                        <div class="col-3">
                            Quantity :
                        </div>
                        <div class="col-3 counter-box">
                            <span class="counter" style="font-weight: bolder;" onclick="counter( -1 )">-</span>
                            <span class="counter" id="cou">1</span>
                            <span class="counter" onclick="counter( +1 )">+</span>
                        </div>
                        <div class="col-3">
                            <a href="./cart.php?id=<?php echo $id ?>&quantity=1"
                                id="quantity">
                                <div class="button-cart">Add to Cart</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-box">
            <div class="tab">
                <button class="tablinks" id="defaultOpen" onclick="openCity(event, 'London')">Description</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Additional Information</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Reviws</button>
            </div>

            <div id="London" class="tabcontent">
                <h3>
                    <?php echo $row[0][2] ?>
                </h3>
                <p>
                    <?php echo $row[0][3] ?>
                </p>
            </div>

            <div id="Paris" class="tabcontent" style="padding: 15px">
                <span class="heading">User Rating</span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <p>4.1 average based on 254 reviews.</p>
                <hr style="border:3px solid #f1f1f1">

                <div class="row1">
                    <div class="side">
                        <div>5 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-5"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div>150</div>
                    </div>
                    <div class="side">
                        <div>4 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-4"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div>63</div>
                    </div>
                    <div class="side">
                        <div>3 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-3"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div>15</div>
                    </div>
                    <div class="side">
                        <div>2 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-2"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div>6</div>
                    </div>
                    <div class="side">
                        <div>1 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                            <div class="bar-1"></div>
                        </div>
                    </div>
                    <div class="side right">
                        <div>20</div>
                    </div>
                </div>
            </div>

            <div id="Tokyo" class="tabcontent">
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-3">
                                <div class="round"></div>
                                <i class="fas fa-star" style="color:tomato;"></i>
                                <i class="fas fa-star" style="color:tomato;"></i>
                                <i class="fas fa-star" style="color:tomato;"></i>
                                <i class="fas fa-star" style="color:tomato;"></i>
                                <i class="far fa-star" style="color:tomato;"></i>
                            </div>
                            <div class="col-7">
                                <span style="color:tomato">27 Aug 2018</span>
                                <h3>Brandon William</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-3">
                                <div class="round"></div>
                                <i class="fas fa-star" style="color:tomato;"></i>
                                <i class="fas fa-star" style="color:tomato;"></i>
                                <i class="fas fa-star" style="color:tomato;"></i>
                                <i class="fas fa-star" style="color:tomato;"></i>
                                <i class="far fa-star" style="color:tomato;"></i>
                            </div>
                            <div class="col-7">
                                <span style="color:tomato">27 Aug 2018</span>
                                <h3>Brandon William</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <h3>Add Review</h3>

                        <form action="">
                            <input type="text" name="" id="" placeholder="Name">
                            <input type="email" name="" id="" placeholder="Email">
                            <h3>Your Review : </h3>
                            <div>
                                <i class="fas fa-star" style="color:tomato;"></i>
                                <i class="fas fa-star" style="color:tomato;"></i>
                                <i class="fas fa-star" style="color:tomato;"></i>
                                <i class="fas fa-star" style="color:tomato;"></i>
                                <i class="far fa-star" style="color:tomato;"></i>
                            </div>
                            <div>
                                <textarea name="" id="" cols="30" rows="10" placeholder="Your Comment" style="margin-top: 15px;"></textarea>
                            </div>
                            <input type="submit" value="Submit" style="width:30%">
                        </form>
                    </div>
                </div>
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

            function counter(temp) {
                var num = document.getElementById("cou").innerHTML;

                if (temp == +1) {
                    num = parseInt(num) + 1;

                    document.getElementById("cou").innerHTML = num;

                    var str = "./cart.php?id=<?php echo $id ?>&quantity=" + num;

                    document.getElementById("quantity").href = str;
                }
                if (num != 1 && temp == -1) {
                    num = parseInt(num) - 1;

                    document.getElementById("cou").innerHTML = num;

                    var str = "./cart.php?id=<?php echo $id ?>&quantity=" + num;

                    document.getElementById("quantity").href = str;
                }
            }

            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }

            document.getElementById("defaultOpen").click();

        </script>

        <script src="./js/FontAwesomeAll.js"></script>

    </body>

</html>
