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

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $sql1 = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($sql1);
    $uid = $row["id"];
    
    $query2 = "INSERT INTO `friends` (`friends_id`, `id`, `friend_id`) VALUES (null, '$uid', '$uid')";
        
    if (mysqli_query($con, $query2)) {
        header("location:index.php");
    } else {
        echo mysqli_error($con);
    }
}else {
        echo mysqli_error($con);
    }


?>