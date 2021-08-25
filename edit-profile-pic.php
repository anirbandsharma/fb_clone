<?php

include './connect.php';

$id = $_GET["id"];


$profile_photo = $_FILES["profile_photo"];
$profile_photo_name = $_FILES['profile_photo']['name'];
$profile_photo_temp = $_FILES['profile_photo']['tmp_name'];

	$profile_photo_filedestination = 'uploads/' . $profile_photo_name;
	move_uploaded_file($profile_photo_temp, $profile_photo_filedestination);


    $query = "UPDATE `users` SET `profile_photo` = '$profile_photo_filedestination' WHERE `id` = '$id'";

    if (mysqli_query($con, $query)) {
        header("location:fb-myprofile.php");
    } else {
        echo mysqli_error($con);
    }


?>