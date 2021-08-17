<?php
session_start();
if (!$_SESSION['email']) {
    header("LOCATION: index.php");
}
$email = $_SESSION['email'];

include './connect.php';
$sql = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
$row = mysqli_fetch_array($sql);
$id = $row["id"];
$fname = $row["f_name"];
$lname = $row["l_name"];
$pro_photo = $row["profile_photo"];
$cover_photo = $row["cover_photo"];
$bio = $row["bio"];
$work = $row["work"];
$relationship = $row["relationship"];
$contact = $row["contact"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $fname.' '.$lname ; ?></title>
    <link rel="stylesheet" href="./css/fb-profile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
<nav>
        <div class="nav">
            <div class="left-nav">
                <span class="material-icons" style="font-size: 48px; color: rgb(24, 128, 226);">facebook</span>
                <div class="search-bar">
                    <span class="material-icons con">
                        search
                    </span>
                    <input placeholder="Search...">
                </div>
            </div>
            <div class="feed-nav">
                <div class="icon" onclick="location.href='fb-clone.php';">
                    <span class="material-icons">home</span>
                </div>
                <div class="icon">
                    <span class="material-icons">ondemand_video</span>
                </div>
                <div class="icon">
                    <span class="material-icons">storefront</span>
                </div>
                <div class="icon">
                    <span class="material-icons">groups</span>
                </div>
                <div class="icon">
                    <span class="material-icons">extension</span>
                </div>
            </div>
            <div class="right-nav">
                <div class="pro" onclick="location.href='fb-myprofile.php';">
                <img src="<?php echo $pro_photo; ?>" class="avatar">
                    <p><?php echo $fname; ?></p>
                </div>
                <button>
                    <span class="material-icons">apps</span>
                </button>
                <button>
                    <span class="material-icons">forum</span>
                </button>
                <button id="myBtn-notification">
                    <span class="material-icons">circle_notifications</span>
                </button>
                <button id="myBtn">
                    <span class="material-icons">arrow_drop_down_circle</span>
                </button>
            </div>

            <!-- notification modal -->
            <?php include('notification.php'); ?>

            <!-- The Modal -->
            <div id="myModal" class="modal">
                <div class="modal-content">

                    <div class="modal-options">
                        <button onclick="location.href='fb-myprofile.php';">
                            <img src="<?php echo $pro_photo; ?>" alt="" class="avatar">
                            <div class="text">
                                <h3><b><?php echo $fname . " " . $lname; ?></b></h3>
                                <p>See your profile.</p>
                            </div>
                        </button>
                    </div>

                    <center>
                        <div class="line"></div>
                    </center>

                    <div class="modal-options">
                        <button>
                            <span class="material-icons">
                                rate_review
                            </span>
                            <div class="text">
                                <h4>Give Feedback</h4>
                                <p>Help us improve the new website.</p>
                            </div>
                        </button>
                    </div>

                    <center>
                        <div class="line"></div>
                    </center>

                    <div class="modal-options">
                        <button>
                            <span class="material-icons">
                                settings
                            </span>
                            <h4>Settings & privacy</h4>
                        </button>
                    </div>

                    <div class="modal-options">
                        <button>
                            <span class="material-icons">
                                help
                            </span>
                            <h4>Help & support</h4>
                        </button>
                    </div>

                    <div class="modal-options">
                        <button id="myBtn2" class="arrow">
                            <div class="btn-content">
                                <span class="material-icons">
                                    dark_mode
                                </span>
                                <h4>Display & accessibility</h4>
                            </div>
                            <span class="material-icons">
                                arrow_forward_ios
                            </span>
                        </button>
                    </div>

                    <div class="modal-options">
                        <button onclick="location.href='./logout.php';">
                            <span class="material-icons">
                                logout
                            </span>
                            <h4>Log Out</h4>
                        </button>
                    </div>

                </div>
            </div>

            <!-- The Modal2 -->
            <div id="myModal2" class="modal">
                <div class="modal-content">

                    <div class="modal-options active">
                        <button id="myBtn3" class="material-icons">
                            arrow_back
                        </button>
                        <div class="text">
                            <h3><b>Display and accessibility</b></h3>
                        </div>
                    </div>

                    <div class="modal-options">
                        <button class="change">
                            <span class="material-icons">
                                dark_mode
                            </span>
                            <div class="text">
                                <h4>Dark Mode</h4>
                                <p>Adjust the appearance of Facebook to reduce glare and give your eyes a break.</p>
                            </div>
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </nav>

    <div class="header">
        <div class="cover-photo">
            <img src="<?php echo $cover_photo; ?>" alt="">
        </div>
        <div class="head-profile">
            <img src="<?php echo $pro_photo; ?>" alt="">
        <div class="name">
            <h1><?php echo $fname.' '.$lname ; ?></h1>
            <p style="color: rgb(16, 86, 190);"><?php echo $bio; ?></p>
        </div>
    </div>
    <div class="header-line"></div>
    </div>

    <div class="profile-nav">
        <div class="profile-nav-container">
            <div class="profile-nav-container-left">
                <div class="profile-item active1"><h4>Posts</h4></div>
                <div class="profile-item"><h4>About</h4></div>
                <div class="profile-item"><h4>Friends</h4></div>
                <div class="profile-item"><h4>Photos</h4></div>
                <div class="profile-item"><h4>More</h4></div>
            </div>
            <div class="profile-nav-container-right">
                <button style="background-color: rgb(0, 132, 255); color: white;">Add to story</button>
                <button id="edit-profile-btn">Edit profile</button>
                <button>...</button>
            </div>
        </div>
    </div>
    
    <div class="profile-body">
        <div class="profile-left">
            <div class="left-card">
                <h3>Intro</h3>
                <p>From <b>location_variable</b></p>
                <p>Work: <b><?php echo $work; ?></b></p>
                <p>Relationship: <b><?php echo $relationship; ?></b></p>
                <p>Contact <b><?php echo $contact; ?></b></p>
            </div>

            <div class="left-card">
                <div class="left-card-heading">
                    <h3>Photos</h3>
                    <a href="#">See all photos</a>
                </div>
                <div class="lib">

                <?php
                $query_lib = "SELECT * FROM posts WHERE posts.id = $id order by post_id DESC";
                $result_lib = mysqli_query($con, $query_lib);


                while ($rowlib = mysqli_fetch_array($result_lib)) {
                    $photolib = $rowlib["photo"];
                    $piecelib = explode(".", $photolib);
                    $extlib = end($piecelib);
                    $allowedlib = array('jpg', 'jpeg', 'png');
                    
                    if (in_array($extlib, $allowedlib)) { ?>

                    <div class="lib-thumb">
                        <img src="<?php echo $photolib; ?>" class="lib-thumb">
                    </div>

                   <?php } } ?> 

                </div>
            </div>

            <div class="left-card">
                <div class="left-card-heading">
                    <h3>Friends</h3>
                    <a href="#">See all friends</a>
                </div>
                <div class="lib">
                    <div class="lib-thumb">
                        <img src="images/avatar.jpg" class="lib-thumb">
                        <p>Some Name</p>
                    </div>
                    <div class="lib-thumb">
                        <img src="images/avatar.jpg" class="lib-thumb">
                        <p>Some Name</p>
                    </div>
                    <div class="lib-thumb">
                        <img src="images/avatar.jpg" class="lib-thumb">
                        <p>Some Name</p>
                    </div>
                    <div class="lib-thumb">
                        <img src="images/avatar.jpg" class="lib-thumb">
                        <p>Some Name</p>
                    </div>
                    <div class="lib-thumb">
                        <img src="images/avatar.jpg" class="lib-thumb">
                        <p>Some Name</p>
                    </div>
                    <div class="lib-thumb">
                        <img src="images/avatar.jpg" class="lib-thumb">
                        <p>Some Name</p>
                    </div>
                    <div class="lib-thumb">
                        <img src="images/avatar.jpg" class="lib-thumb">
                        <p>Some Name</p>
                    </div>
                    <div class="lib-thumb">
                        <img src="images/avatar.jpg" class="lib-thumb">
                        <p>Some Name</p>
                    </div>
                    <div class="lib-thumb">
                        <img src="images/avatar.jpg" class="lib-thumb">
                        <p>Some Name</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="profile-right">
            
            <!-- post -->
            <div class="post">
                <div class="post-top">
                    <img src="<?php echo $pro_photo; ?>" class="avatar">
                    <div class="post-input" id="myBtn-post">What's on your mind, <?php echo $fname; ?>?</div>
                </div>
                <center>
                    <div class="line"></div>
                </center>
                <div class="post-bottom">
                    <div class="post-btn">
                        <span class="material-icons" style="color: red;">
                            voice_chat
                        </span>
                        <h4>Live Video</h4>
                    </div>
                    <div class="post-btn" onclick="fileupload()">
                        <span class="material-icons" style="color: rgb(32, 167, 32);">
                            collections
                        </span>
                        <h4>Photo/Video</h4>
                    </div>
                    <div class="post-btn">
                        <span class="material-icons" style="color: rgb(247, 210, 0);">
                            sentiment_very_satisfied
                        </span>
                        <h4>Feeling/Activity</h4>
                    </div>
                </div>
            </div>

              <!-- post-modal -->
              <div id="myModal-post" class="modal-post">
                <div class="modal-content-post">
                    <div class="post-heading">
                        <center>
                            <h3>Create post</h3>
                        </center>
                    </div>
                    <div class="line"></div>
                    <div class="profile">
                        <img src="<?php echo $pro_photo; ?>" class="avatar" alt="">
                        <h5><?php echo $fname . " " . $lname; ?></h5>
                    </div>
                    <form method="POST" enctype="multipart/form-data" action="post.php?id=<?php echo $id; ?>">
                        <textarea name="post_detail" placeholder="What's on your mind, <?php echo $fname; ?>?"></textarea>
                        <input type="file" name="file" id="file">
                        <input type="submit" class="post-submit" value="Post">
                    </form>
                </div>
            </div>


            <!-- feed -->
            <div class="feed-container">

                <?php
                $query = "SELECT * FROM (posts INNER JOIN users ON posts.id = users.id) WHERE posts.id = $id order by posts.post_id DESC";
                $result = mysqli_query($con, $query);


                while ($row = mysqli_fetch_array($result)) {
                    $post_id = $row["post_id"];
                    $name = $row["f_name"] . " " . $row["l_name"];
                    $post_detail = $row["post_detail"];
                    $time = $row["upload_time"];
                    $photo = $row["photo"];
                    $piece = explode(".", $photo);
                    $ext = end($piece);
                    $msgID = $post_id;

                    $query2 = "SELECT * FROM (comments INNER JOIN posts ON comments.post_id = posts.post_id) INNER JOIN users ON comments.id = users.id WHERE posts.post_id=$post_id ORDER BY comments.comment_time ASC";
                    $result2 = mysqli_query($con, $query2);

                    $count = mysqli_query($con, "SELECT COUNT(com_id) FROM comments WHERE comments.post_id=$post_id");
                    $comment_count = mysqli_fetch_array($count);

                    $count2 = mysqli_query($con, "SELECT COUNT(like_id) FROM likes WHERE likes.post_id=$post_id");
                    $like_count = mysqli_fetch_array($count2);
                ?>

                    <div class="feed-card" data-id="<?php echo $msgID; ?>">
                        <div class="feed-card-title">
                            <img src="images/android.jpeg" alt="" class="avatar">
                            <div class="name">
                                <h4><?php echo $name; ?> </h4>
                                <p><?php echo $time; ?> </p>
                            </div>
                        </div>
                        <p><?php echo $post_detail; ?></p>

                        <?php
                        $allowed = array('jpg', 'jpeg', 'png', 'uploads/');
                        if (in_array($ext, $allowed)) {
                        ?>
                            <img src="<?php echo $photo; ?>" alt="" class="feed-post">
                        <?php
                        } else {
                        ?>
                            <video width="100%" controls>
                                <source src="<?php echo $photo; ?>" type="video/mp4">
                            </video>
                        <?php
                        }
                        ?>
                        <div class="counters">
                            <div class="like">
                                <span class="material-icons" style="color: rgb(62, 165, 233); font-size: 17px;">
                                    thumb_up
                                </span>
                                <p><?php echo $like_count[0]; ?></p>
                            </div>
                            <div class="like">
                                <p><?php echo $comment_count[0]; ?> comments 26 shares</p>
                            </div>
                        </div>
                        <center>
                            <div class="line"></div>
                        </center>
                        <div class="actions">
                            <?php
                            $sqllike = "SELECT COUNT(*) FROM likes WHERE post_id = '$post_id' AND id = '$id'";
                            $resultlike = mysqli_query($con, $sqllike);
                            $countlike = mysqli_fetch_array($resultlike);
                            ?>
                            <div class="like" onclick="location.href='like.php?post_id=<?php echo $post_id; ?>&id=<?php echo $id; ?>';" <?php
                                                                                                                                        if ($countlike[0] == 0) {
                                                                                                                                            echo 'style="color:rgb(128, 128, 128);">
                            <span style="color:gray;" class="material-icons">
                                thumb_up
                            </span> ';
                                                                                                                                        } else {
                                                                                                                                            echo 'style="color:rgb(32, 115, 184);">
                            <span style="color:rgb(32, 115, 184);" class="material-icons">
                                thumb_up
                            </span> ';
                                                                                                                                        } ?> <p>Like</p>
                            </div>
                            <div class="like">
                                <span class="material-icons">
                                    chat_bubble
                                </span>
                                <p>Comment</p>
                            </div>
                            <div class="like">
                                <span class="material-icons">
                                    share
                                </span>
                                <p>Share</p>
                            </div>
                        </div>
                        <div class="comment">
                            <center>
                                <div class="line"></div>
                            </center>
                            <div class="post-top">
                                <img src="<?php echo $pro_photo; ?>" class="avatar">
                                <div class="post-input">
                                    <form action="comment.php?post_id=<?php echo $post_id; ?>&id=<?php echo $id; ?>" method="POST">
                                        <input type="text" name="comment" placeholder="Write a comment..." autocomplete="off">
                                    </form>
                                </div>
                            </div>
                            <?php
                            while ($row2 = mysqli_fetch_array($result2)) {
                                $com_id = $row2["com_id"];
                                $name_c = $row2["f_name"] . " " . $row2["l_name"];
                                $comment = $row2["comment"];
                                $comment_time = $row2["comment_time"];

                            ?>
                                <div class="comment-read">
                                    <img src="images/avatar.jpg" class="avatar">
                                    <div class="comment-detail">
                                        <h5><?php echo $name_c; ?></h5>
                                        <p><?php echo $comment; ?></p>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                <?php
                }
                ?>
                
            </div>

        </div>

    </div>
    
    <?php include('edit-profile.php'); ?>

    <!-- moadl js -->
   <script src="./js/modal-profile.js"></script>

   <script>
        function fileupload() {
            document.getElementById('file').click();
            document.getElementById('myModal-post').style.display = "block";
            myBtn - post
        }
    </script>

   <!-- dark-mode -->
    <script src="./js/fb-clone-dark.js"></script>

</body>

</html>