<?php

include './connect.php';

$id = $_GET["id"];

$bio = $_POST["bio"];
$work = $_POST["work"];
$relationship = $_POST["relationship"];
$contact = $_POST["contact"];


    $query = "UPDATE `users` SET `bio` = '$bio', `work` = '$work', `relationship` = '$relationship', `contact` = '$contact' WHERE `id` = '$id'";

    if (mysqli_query($con, $query)) {
        header("location:fb-myprofile.php");
    } else {
        echo mysqli_error($con);
    }


?>