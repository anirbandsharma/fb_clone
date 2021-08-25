<?php

include './connect.php';

$id = $_GET["id"];

$cover_photo = $_FILES["cover_photo"];
$cover_photo_name = $_FILES['cover_photo']['name'];
$cover_photo_temp = $_FILES['cover_photo']['tmp_name'];

	$cover_photo_filedestination = 'uploads/' . $cover_photo_name;
	move_uploaded_file($cover_photo_temp, $cover_photo_filedestination);


    $query = "UPDATE `users` SET `cover_photo` = '$cover_photo_filedestination' WHERE `id` = '$id'";

    if (mysqli_query($con, $query)) {
        header("location:fb-myprofile.php");
    } else {
        echo mysqli_error($con);
    }


?>