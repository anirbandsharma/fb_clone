<?php

include './connect.php';

$post_id = $_POST["post_id"];
$id = $_GET["id"];
$post_detail = $_POST["post_detail"];


    $query = "INSERT INTO `posts` (`post_id`, `id`, `post_detail`, `upload_time`) VALUES (null, '$id', '$post_detail', CURRENT_TIMESTAMP)";

    if (mysqli_query($con, $query)) {
        header("location:fb-clone.php");
    } else {
        echo mysqli_error($con);
    }


?>