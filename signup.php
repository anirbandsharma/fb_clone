<?php

include './connect.php';

$id = $_POST["id"];
$f_name = $_POST["f_name"];
$l_name = $_POST["l_name"];
$email = $_POST["email"];
$password = $_POST["password"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];


    $query = "INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `password`, `dob`, `gender`) VALUES (null, '$f_name', '$l_name', '$email', '$password', '$dob', '$gender')";

    if (mysqli_query($con, $query)) {
        header("location:index.php");
    } else {
        echo mysqli_error($con);
    }


?>