<?php

session_start();

$comment = "";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$comment = test_input($_POST["subject"]);

$userName=$_SESSION['userName'];

$con = mysqli_connect("localhost", "root", "", "wad_db");

if (!$con) {
    die("Cannot connect to DB server");
}

$sql = "INSERT INTO `wad_contactUs`(`userName`, `comment`)
        VALUES ('".$userName."','".$comment."')";

mysqli_query($con, $sql);

mysqli_close($con);

header('Location:index.php');
