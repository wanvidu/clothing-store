<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Registration</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
            crossorigin="anonymous">
        <link rel="stylesheet" href="css/registrationStyle.css">
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
            <a href="#home">Home</a>
            <div class="dropdown">
                <button class="dropbtn">Shop
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <div class="header">
                        <h2>Mega Menu</h2>
                    </div>
                    <div class="row">
                        <div class="column">
                            <h3>Category 1</h3>
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                        <div class="column">
                            <h3>Category 2</h3>
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                        <div class="column">
                            <h3>Category 3</h3>
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#news">Blog</a>
            <a href="#news">Contact</a>
            <div class="topnav-right">
                <a href="#search">
                    <i class="fa fa-fw fa-search"></i>
                </a>
                <a href="#about" onclick="showLogin()">
                    <i class="fa fa-fw fa-user"></i>
                </a>
                <a href="#about">
                    <span class="fa-layers">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="fa-layers-counter" style="background:blue;">3</span>
                    </span>
                </a>
            </div>
        </div>

        <div id="myModal" class="modal">

            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Login or SignUp</h2>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="/action_page.php">
                            <div class="row">

                                <div class="col">
                                    <a href="#" class="fb btn">
                                        <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                                    </a>
                                    <a href="#" class="twitter btn">
                                        <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                                    </a>
                                    <a href="#" class="google btn">
                                        <i class="fa fa-google fa-fw">
                                        </i> Login with Google+
                                    </a>
                                </div>

                                <div class="col">
                                    <input type="text" name="username" placeholder="Username" required>
                                    <input type="password" name="password" placeholder="Password" required>
                                    <input type="submit" value="Login">
                                </div>

                            </div>
                        </form>
                    </div>

                    <div class="bottom-container">
                        <div class="row">
                            <div class="col">
                                <a href="#" style="color:white" class="btn">Sign up</a>
                            </div>
                            <div class="col">
                                <a href="#" style="color:white" class="btn">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                Create a Profile
            </div>
            <div class="card-body">
                <div>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="myForm" onSubmit="return formValidation();" id="myForm" novalidate>
                        <div class="form-row">
                            <label>First Name</label>
                            <input type="text" placeholder="Your Name.." autofocus>
                            <small>Enter Valid Name</small>
                        </div>

                        <div class="form-row">
                            <label>Nike Name</label>
                            <input type="text" placeholder="Your Nike Name..">
                            <small>Enter Valid Nike Name</small>
                        </div>

                        <div class="form-row">
                            <label>Email Address</label>
                            <input type="email" placeholder="Your Email Address..">
                            <small>Enter Valid Email Address</small>
                        </div>

                        <div class="form-row">
                            <label>Contact Number</label>
                            <input type="text" placeholder="Your Contact Number..">
                            <small>Enter Valid Contact Number</small>
                        </div>

                        <div class="form-row">
                            <label>Gender</label>
                            <div class="radio">
                                <input type="radio" name="r" id="r1">Male
                                <input type="radio" name="r" id="r2">Female
                            </div>
                            <small>Choose One</small>
                        </div>

                        <div class="form-row">
                            <label>Password</label>
                            <div class="flex-container">
                                <div style="flex-grow: 11">
                                    <input type="password" id="password-field" placeholder="Enter Password...">
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
                                    <input type="password" id="con-password-field" placeholder="Re-Enter Password...">
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
                    <a href="#">Home</a>
                    ·
                    <a href="#">Products</a>
                    ·
                    <a href="#">Cart</a>
                    ·
                    <a href="#">About</a>
                    ·
                    <a href="#">FAQ</a>
                    ·
                    <a href="#">Contact</a>
                    ·
                    <a href="#">Privacy Policy </a>
                </p>

                <p class="footer-company-name">DressStyle &copy; 2018</p>
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
                    Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor
                    lacus vehicula sit amet.
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
                    var firstErrorIndex = 0;

                    for (let i = 0; i < (checkList.length) - 3; i++) {
                        if (!checkList[i]) {
                            firstErrorIndex = i;
                            break;
                        }
                    }

                    setFocus(firstErrorIndex);
                }

                if (check) {
                    var dis = confirm("Do you want to submit this form?");

                    if (!dis) {
                        return false;
                        e.preventDefault();
                    } else {
                        return true;
                    }
                } else {
                    return false;
                    e.preventDefault();
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
