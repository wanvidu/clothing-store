<?php

$id = $name = $nikename = $email = $number = $gender = $password = "";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = test_input($_POST["txtName"]);

$nikename = test_input($_POST["txtNikeName"]);

$email = test_input($_POST["txtEmail"]);

$number = test_input($_POST["txtNumber"]);

$gender = test_input($_POST["r"]);

$password = test_input($_POST["password_field"]);

$con = mysqli_connect("localhost", "root", "", "wad_db");

if (!$con) {
    die("Cannot connect to DB server");
}

$sql = "INSERT INTO `wad_users`(`name`, `nike_name`, `email`, `tp`, `gender`, `password`)
        VALUES ('".$name."','".$nikename."','".$email."','".$number."','".$gender."','".$password."')";

mysqli_query($con, $sql);

$sql = "SELECT `id` FROM `wad_users` WHERE `email` = '".$email."'";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result)> 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
    }
}

$sql = "INSERT INTO `wad_login`(`login_id`, `email`, `password`)
        VALUES ('".$id."','".$email."','".$password."')";

mysqli_query($con, $sql);

mysqli_close($con);

header('Location:index.php');
