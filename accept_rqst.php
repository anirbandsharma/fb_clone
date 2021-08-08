<?php

include './connect.php';

session_start();
if (!$_SESSION['email']) {
    header("LOCATION: index.php");
}
$email = $_SESSION['email'];
$sql = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
$row1 = mysqli_fetch_array($sql);
$id = $row1["id"];

$rid = $_GET["rid"];

    $query = "INSERT INTO `friends` (`friends_id`, `id`, `friend_id`) VALUES (null, '$rid', '$id') , (null, '$id', '$rid')";
    $query2 = "DELETE FROM friend_rqst WHERE id = '$id' AND friend_id = '$rid'";

    if (mysqli_query($con, $query)) {
        mysqli_query($con, $query2);
        header("location:fb-clone.php");
    } else {
        echo mysqli_error($con);
    }

   
?>