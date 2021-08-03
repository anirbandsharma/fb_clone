<?php

include './connect.php';

$post_id = $_POST["post_id"];
$id = $_GET["id"];
$post_detail = $_POST["post_detail"];
$file = $_FILES["file"];

$filename = $_FILES['file']['name'];
$filetemp = $_FILES['file']['tmp_name'];

				$filedestination = 'uploads/' . $filename;
				move_uploaded_file($filetemp, $filedestination);


    $query = "INSERT INTO `posts` (`post_id`, `id`, `post_detail`, `upload_time`, `photo`) VALUES (null, '$id', '$post_detail', CURRENT_TIMESTAMP, '$filedestination')";

    if (mysqli_query($con, $query)) {
        header("location:fb-clone.php");
    } else {
        echo mysqli_error($con);
    }


?>