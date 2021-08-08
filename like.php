<?php

include './connect.php';

$post_id = $_GET["post_id"];
$id = $_GET["id"];


    $sql = "SELECT COUNT(*) FROM likes WHERE post_id = '$post_id' AND id = '$id'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_fetch_array($result);

    $query = "INSERT INTO `likes` (`like_id`, `post_id`, `id`) VALUES (null, '$post_id', '$id')";
    $query2 = "DELETE FROM likes WHERE post_id = '$post_id' AND id = '$id'";
    
if ($count[0] == 0) {
    if (mysqli_query($con, $query)) {
        header("location:fb-clone.php");
    } else {
        echo mysqli_error($con);
    }
}else{
    if (mysqli_query($con, $query2)) {
        header("location:fb-clone.php");
    } else {
        echo mysqli_error($con);
    }
}

?>