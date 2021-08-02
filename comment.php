<?php

include './connect.php';

$post_id = $_GET["post_id"];
$id = $_GET["id"];
$comment = $_POST["comment"];


    $query = "INSERT INTO `comments` (`com_id`, `post_id`, `id`,`comment`, `comment_time`) VALUES (null, '$post_id', '$id', '$comment', CURRENT_TIMESTAMP)";

    if (mysqli_query($con, $query)) {
        header("location:fb-clone.php");
    } else {
        echo mysqli_error($con);
    }


?>