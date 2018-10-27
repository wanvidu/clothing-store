<?php

    session_start();

    $email = (isset($_POST['email'])) ? $_POST['email'] : 'default';
    $password = (isset($_POST['password'])) ? $_POST['password'] : 'default';
    $validEmail=false;
    $validPassword=false;

    $con = mysqli_connect("localhost", "root", "", "wad_db");

    if (!$con) {
        die("Cannot connect to DB server");
    }

    $sql ="SELECT `email` FROM `wad_login` WHERE `email`='".$email."'";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) >0) {
        $validEmail = true;
    }

    if ($validEmail) {
        $sql ="SELECT `email`,`password` FROM `wad_login` WHERE `email`='".$email."' AND `password`='".$password."'";

        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) >0) {
            $validPassword = true;
            $_SESSION["userName"] = $email;
        }
    }

    mysqli_close($con);

    $strEmail="";
    $strPassword="";

    if ($validEmail) {
        $strEmail="1";
    } else {
        $strEmail="0";
    }

    if ($validPassword) {
        $strPassword="1";
    } else {
        $strPassword="0";
    }

    $arr=['email'=>$strEmail,'password'=>$strPassword,'userName'=>$email];

    echo json_encode($arr);
