<?php

include './connect.php';

$id = $_GET["id"];

$bio = $_POST["bio"];
$work = $_POST["work"];
$relationship = $_POST["relationship"];
$contact = $_POST["contact"];

$profile_photo = $_FILES["profile_photo"];
$profile_photo_name = $_FILES['profile_photo']['name'];
$profile_photo_temp = $_FILES['profile_photo']['tmp_name'];

	$profile_photo_filedestination = 'uploads/' . $profile_photo_name;
	move_uploaded_file($profile_photo_temp, $profile_photo_filedestination);

$cover_photo = $_FILES["cover_photo"];
$cover_photo_name = $_FILES['cover_photo']['name'];
$cover_photo_temp = $_FILES['cover_photo']['tmp_name'];

	$cover_photo_filedestination = 'uploads/' . $cover_photo_name;
	move_uploaded_file($cover_photo_temp, $cover_photo_filedestination);


    $query = "UPDATE `users` SET `profile_photo` = '$profile_photo_filedestination', `cover_photo` = '$cover_photo_filedestination', `bio` = '$bio', `work` = '$work', `relationship` = '$relationship', `contact` = '$contact' WHERE `id` = '$id'";

    if (mysqli_query($con, $query)) {
        header("location:fb-myprofile.php");
    } else {
        echo mysqli_error($con);
    }


?>