
<?php

include './connect.php';

session_start();
$email = $_POST["email"];
$password = $_POST["password"];
$result=mysqli_query($con,"select * from users where email = '$email'");
	$row=mysqli_fetch_array($result);
	if($row['password']==$password)
	{
		$_SESSION['email']=$email;
 		header("Location:fb-clone.html");
 	}
 	else
 	{
 		header("location:index.php?err=1");
 	}
 


?>
