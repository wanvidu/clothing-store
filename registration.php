<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Registration</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
            crossorigin="anonymous">
        <link rel="stylesheet" href="./css/registrationStyle.css">
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
                <a href="./index.php">
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

        <div class="card">
            <div class="card-header">
                Create a Profile
            </div>
            <div class="card-body">
                <div>
                    <form method="post" action="addUser.php" name="myForm" onSubmit="return formValidation();" id="myForm"
                        novalidate>
                        <div class="form-row">
                            <label>First Name</label>
                            <input type="text" id="txtName" name="txtName" placeholder="Your Name.." autofocus>
                            <small>Enter Valid Name</small>
                        </div>

                        <div class="form-row">
                            <label>Nike Name</label>
                            <input type="text" id="txtNikeName" name="txtNikeName" placeholder="Your Nike Name..">
                            <small>Enter Valid Nike Name</small>
                        </div>

                        <div class="form-row">
                            <label>Email Address</label>
                            <input type="email" id="txtEmail" name="txtEmail" placeholder="Your Email Address..">
                            <small>Enter Valid Email Address</small>
                        </div>

                        <div class="form-row">
                            <label>Contact Number</label>
                            <input type="text" id="txtNumber" name="txtNumber" placeholder="Your Contact Number..">
                            <small>Enter Valid Contact Number</small>
                        </div>

                        <div class="form-row">
                            <label>Gender</label>
                            <div class="radio">
                                <input type="radio" name="r" id="r1" value="Male">Male
                                <input type="radio" name="r" id="r2" value="Female">Female
                            </div>
                            <small>Choose One</small>
                        </div>

                        <div class="form-row">
                            <label>Password</label>
                            <div class="flex-container">
                                <div style="flex-grow: 11">
                                    <input type="password" id="password-field" name="password_field" placeholder="Enter Password...">
                                </div>
                                <div style="flex-grow: 1">
                                    <button type="button" onClick="viewPassword('password-field','pass-status')" class="btn">
                                        <i id="pass-status" class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <small>Enter Valid Password</small>
                        </div>

                        <div class="form-row">
                            <label>Confirm Password</label>
                            <div class="flex-container">
                                <div style="flex-grow: 11">
                                    <input type="password" id="con-password-field" name="con_password_field"
                                        placeholder="Re-Enter Password...">
                                </div>
                                <div style="flex-grow: 1">
                                    <button type="button" onClick="viewPassword('con-password-field','con-pass-status')"
                                        class="btn">
                                        <i id="con-pass-status" class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <small>Passwords not Matching</small>
                        </div>

                        <input type="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </form>
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

            var e = document.getElementsByTagName("small");

            for (let i = 0; i < e.length; i++) {
                e[i].style.display = "none";
            }

            var input = document.getElementsByTagName("input");


            function formValidation() {
                var checkList = [
                    validateFName(),
                    validateNName(),
                    validateEmail(),
                    validatePhone(),
                    validatePassword(),
                    validateConPassword(),
                    validateSex()
                ];

                var check = true;

                for (let i = 0; i < checkList.length; i++) {
                    if (!checkList[i]) {
                        check = false;
                        break;
                    }
                }

                if (!check) {

                    return false;

                    var firstErrorIndex = 0;

                    for (let i = 0; i < (checkList.length) - 3; i++) {
                        if (!checkList[i]) {
                            firstErrorIndex = i;
                            break;
                        }
                    }

                    setFocus(firstErrorIndex);
                } else {
                    return true;
                }
            }

            function validateFName() {
                var fName = input[0].value;

                if (fName == null || fName == "" || !(/^[A-z\s]+$/.test(fName))) {
                    e[0].style.display = "block";
                    return false;
                } else {
                    e[0].style.display = "none";
                    return true;
                }
            }

            function validateNName() {
                var nName = input[1].value;

                if (nName == null || nName == "" || !(/^[A-z ]+$/.test(nName))) {
                    e[1].style.display = "block";
                    return false;
                } else {
                    e[1].style.display = "none";
                    return true;
                }
            }

            function validateEmail() {
                var email = input[2].value;

                if (email == null || email == "" || !(/^\S+@\S+\.\S+$/.test(email))) {
                    e[2].style.display = "block";
                    return false;
                } else {
                    e[2].style.display = "none";
                    return true;
                }
            }

            function validatePhone() {
                var num = input[3].value;

                if (num == null || num == "" || !(/^\d{10}$/.test(num))) {
                    e[3].style.display = "block";
                    return false;
                } else {
                    e[3].style.display = "none";
                    return true;
                }
            }

            function validateSex() {
                if (document.getElementById("r1").checked || document.getElementById("r2").checked) {
                    e[4].style.display = "none";
                    return true;
                } else {
                    e[4].style.display = "block";
                    return false;
                }
            }

            function validatePassword() {
                var num = document.getElementById("password-field").value;
                if (num == null || num == "" || !(/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/.test(num))) {
                    e[5].style.display = "block";
                    return false;
                } else {
                    e[5].style.display = "none";
                    return true;
                }
            }

            function validateConPassword() {
                var num = document.getElementById("con-password-field").value;
                if (num == null || num == "" || !(/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/.test(num)) || num !=
                    document.getElementById("password-field").value) {
                    e[6].style.display = "block";
                    return false;
                } else {
                    e[6].style.display = "none";
                    return true;
                }
            }

            function selectCountry() {
                var ucountry = document.getElementById("drop");
                if (ucountry.value == "Default") {
                    e[7].style.display = "block";
                    return false;
                } else {
                    e[7].style.display = "none";
                    return true;
                }
            }

            function selectHobby() {
                var ch = document.getElementById("check").getElementsByTagName("input");

                var boo = false;

                for (let i = 0; i < ch.length; i++) {
                    if (ch[i].checked) {
                        boo = true;
                        break;
                    }
                }

                if (!boo) {
                    e[8].style.display = "block";
                    return false;
                } else {
                    e[8].style.display = "none";
                    return true;
                }
            }

            function viewPassword(ele, stat) {
                var passwordInput = document.getElementById(ele);
                var passStatus = document.getElementById(stat);

                if (passwordInput.type == "password") {
                    passwordInput.type = "text";
                    passStatus.className = "fas fa-eye-slash";

                } else {
                    passwordInput.type = "password";
                    passStatus.className = "fas fa-eye";
                }
            }

            function setFocus(index) {
                if (input[index].select) {
                    input[index].select();
                }
                input[index].focus();
            }

        </script>

        <script src="./js/FontAwesomeAll.js"></script>

    </body>

</html>
