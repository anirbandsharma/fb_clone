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

$uid = $_GET["uid"];

    $query = "INSERT INTO `friend_rqst` (`friend_rqst_id`, `id`, `friend_id`) VALUES (null, '$uid', '$id')";
  

    if (mysqli_query($con, $query)) {
        header("location:people.php");
    } else {
        echo mysqli_error($con);
    }

   
?>