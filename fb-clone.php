<?php
session_start();
if (!$_SESSION['email']) {
    header("LOCATION: index.php");
}
$email = $_SESSION['email'];

include './connect.php';
$sql = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
$row = mysqli_fetch_array($sql);
$ss_id = $row1["s_id"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fb-clone</title>
    <link rel="stylesheet" href="./css/fb-clone.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
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
                <div class="icon active">
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
                <div class="pro" onclick="location.href='fb-profile.html';"><img src="images/avatar.jpg" class="avatar">
                    <p>Anirban</p>
                </div>
                <button>
                    <span class="material-icons">apps</span>
                </button>
                <button>
                    <span class="material-icons">forum</span>
                </button>
                <button>
                    <span class="material-icons">circle_notifications</span>
                </button>
                <button id="myBtn">
                    <span class="material-icons">arrow_drop_down_circle</span>
                </button>
            </div>

            <!-- The Modal -->
            <div id="myModal" class="modal">
                <div class="modal-content">

                    <div class="modal-options">
                        <button onclick="location.href='fb-profile.html';">
                            <img src="images/avatar.jpg" alt="" class="avatar">
                            <div class="text">
                                <h3><b>Anirban D Sharma</b></h3>
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
                        <button onclick="location.href='./login.html';">
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

    <div class="main-content">

        <!-- left-sidebar -->
        <div class="left-sidebar">
            <div class="left-content" onclick="location.href='fb-profile.html';">
                <img src="images/avatar.jpg" class="avatar">
                <h4>Anirban D Sharma</h4>
            </div>
            <div class="left-content" onclick="location.href='https://www.mygov.in/covid-19';">
                <span class="material-icons">
                    masks
                </span>
                <h4>Covid-19 Information</h4>
            </div>
            <div class="left-content">
                <span class="material-icons">
                    people
                </span>
                <h4>Friends</h4>
            </div>
            <div class="left-content">
                <span class="material-icons">
                    groups
                </span>
                <h4>Groups</h4>
            </div>
            <div class="left-content">
                <span class="material-icons">
                    storefront
                </span>
                <h4>Marketplace</h4>
            </div>
            <div class="left-content">
                <span class="material-icons">
                    sports_esports
                </span>
                <h4>Watch</h4>
            </div>
            <div class="left-content">
                <span class="material-icons">
                    event
                </span>
                <h4>Events</h4>
            </div>
            <div class="left-content">
                <span class="material-icons">
                    watch_later
                </span>
                <h4>Memories</h4>
            </div>
            <div class="left-content">
                <span class="material-icons">
                    bookmark_added
                </span>
                <h4>Saved</h4>
            </div>
            <div class="left-content">
                <span class="material-icons">
                    flag
                </span>
                <h4>Pages</h4>
            </div>
            <div class="left-content">
                <span class="material-icons">
                    arrow_drop_down_circle
                </span>
                <h4>See More</h4>
            </div>
        </div>

        <!-- feed -->
        <div class="feed">

            <div class="status">
                <div class="status-card">
                    <img src="images/avatar.jpg" alt="">
                </div>
                <div class="status-card">
                    <img src="images/android-post.jpeg" alt="">
                </div>
                <div class="status-card">
                    <img src="images/assassins.png" alt="">
                </div>
                <div class="status-card">
                    <img src="images/android.jpeg" alt="">
                </div>
                <div class="status-card">
                    <img src="images/controller.png" alt="">
                </div>
                <div class="status-card">
                    <img src="images/android.jpeg" alt="">
                </div>
                <div class="status-card">
                    <img src="images/avatar.jpg" alt="">
                </div>
                <div class="status-card">
                    <img src="images/android-post.jpeg" alt="">
                </div>
                <div class="status-card">
                    <img src="images/assassins.png" alt="">
                </div>
                <div class="status-card">
                    <img src="images/android.jpeg" alt="">
                </div>
                <div class="status-card">
                    <img src="images/controller.png" alt="">
                </div>
                <div class="status-card">
                    <img src="images/android.jpeg" alt="">
                </div>
            </div>

<!-- post -->
            <div class="post">
                <div class="post-top">
                    <img src="images/avatar.jpg" class="avatar">
                    <div class="post-input" id="myBtn-post">What's on your mind, Anirban?</div>
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
                    <div class="post-btn">
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
                        <center><h3>Create post</h3></center>
                    </div>
                    <div class="line"></div>
                    <div class="profile">
                        <img src="./images/avatar.jpg" class="avatar" alt="">
                        <h5>Anirban D Sharma</h5>
                    </div>
                    <form action="post.php" method="POST">
                        <textarea name="post" placeholder="What's on your mind, Anirban?"></textarea>
                        <input type="submit" class="post-submit" value="Post">
                    </form>
                </div>
            </div>        


            <div class="feed-container">

                <div class="feed-card">
                    <div class="feed-card-title">
                        <img src="images/android.jpeg" alt="" class="avatar">
                        <div class="name">
                            <h4>Android Authority</h4>
                            <p>26 July at 11:47</p>
                        </div>
                    </div>
                    <p>Oppo Watch 2 leaks ahead of July 27 launch, but will it get the new Wear OS 3?</p>
                    <img src="images/android-post.jpeg" alt="" class="feed-post">
                    <div class="counters">
                        <div class="like">
                            <span class="material-icons" style="color: rgb(62, 165, 233); font-size: 17px;">
                                thumb_up
                            </span>
                            <p>503</p>
                        </div>
                        <div class="like">
                            <p>103 comments 26 shares</p>
                        </div>
                    </div>
                    <center>
                        <div class="line"></div>
                    </center>
                    <div class="actions">
                        <div class="like">
                            <span class="material-icons">
                                thumb_up
                            </span>
                            <p>Like</p>
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
                </div>

                <div class="feed-card">
                    <div class="feed-card-title">
                        <img src="images/android.jpeg" alt="" class="avatar">
                        <div class="name">
                            <h4>Android Authority</h4>
                            <p>26 July at 11:47</p>
                        </div>
                    </div>
                    <p>Oppo Watch 2 leaks ahead of July 27 launch, but will it get the new Wear OS 3?</p>
                    <!-- <img src="images/android-post.jpeg" alt="" class="feed-post"> -->
                    <div class="counters">
                        <div class="like">
                            <span class="material-icons" style="color: rgb(62, 165, 233); font-size: 17px;">
                                thumb_up
                            </span>
                            <p>503</p>
                        </div>
                        <div class="like">
                            <p>103 comments 26 shares</p>
                        </div>
                    </div>
                    <center>
                        <div class="line"></div>
                    </center>
                    <div class="actions">
                        <div class="like">
                            <span class="material-icons">
                                thumb_up
                            </span>
                            <p>Like</p>
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
                </div>

                <div class="feed-card">
                    <div class="feed-card-title">
                        <img src="images/android.jpeg" alt="" class="avatar">
                        <div class="name">
                            <h4>Android Authority</h4>
                            <p>26 July at 11:47</p>
                        </div>
                    </div>
                    <p>Oppo Watch 2 leaks ahead of July 27 launch, but will it get the new Wear OS 3?</p>
                    <img src="images/android-post.jpeg" alt="" class="feed-post">
                    <div class="counters">
                        <div class="like">
                            <span class="material-icons" style="color: rgb(62, 165, 233); font-size: 17px;">
                                thumb_up
                            </span>
                            <p>503</p>
                        </div>
                        <div class="like">
                            <p>103 comments 26 shares</p>
                        </div>
                    </div>
                    <center>
                        <div class="line"></div>
                    </center>
                    <div class="actions">
                        <div class="like">
                            <span class="material-icons">
                                thumb_up
                            </span>
                            <p>Like</p>
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
                </div>

                <div class="feed-card">
                    <div class="feed-card-title">
                        <img src="images/android.jpeg" alt="" class="avatar">
                        <div class="name">
                            <h4>Android Authority</h4>
                            <p>26 July at 11:47</p>
                        </div>
                    </div>
                    <p>Oppo Watch 2 leaks ahead of July 27 launch, but will it get the new Wear OS 3?</p>
                    <img src="images/android-post.jpeg" alt="" class="feed-post">
                    <div class="counters">
                        <div class="like">
                            <span class="material-icons" style="color: rgb(62, 165, 233); font-size: 17px;">
                                thumb_up
                            </span>
                            <p>503</p>
                        </div>
                        <div class="like">
                            <p>103 comments 26 shares</p>
                        </div>
                    </div>
                    <center>
                        <div class="line"></div>
                    </center>
                    <div class="actions">
                        <div class="like">
                            <span class="material-icons">
                                thumb_up
                            </span>
                            <p>Like</p>
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
                </div>
            </div>

        </div>

        <!-- right-sidebar -->
        <div class="right-sidebar">

            <div class="birthday">
                <div class="birthday-head">
                    <div class="birthday-title">
                        <span class="material-icons" style="color: tomato;">
                            redeem
                        </span>
                        <h4>Birthdays</h4>
                    </div>
                    <h4>X</h4>
                </div>
                <p><b>Mr. Rajkumar</b> and <b>2 others</b> have their birthdays today.</p>
            </div>

            <center>
                <div class="line"></div>
            </center>

            <div class="contacts">
                <div class="contacts-head">
                    <div class="contacts-head-title">
                        <h4>Contacts</h4>
                    </div>
                    <div class="contact-head-btn">
                        <span class="material-icons con">
                            video_call
                        </span>
                        <span class="material-icons con">
                            search
                        </span>
                        <span class="material-icons con">
                            more_horiz
                        </span>
                    </div>
                </div>

                <div class="person">
                    <img src="images/avatar.jpg" class="avatar">
                    <h4>Anirban D Sharma</h4>
                </div>
                <div class="person">
                    <img src="images/android.jpeg" class="avatar">
                    <h4>Android Authority</h4>
                </div>
                <div class="person">
                    <img src="images/sackboy.png" class="avatar">
                    <h4>Some Guy</h4>
                </div>
                <div class="person">
                    <img src="images/assassins.png" class="avatar">
                    <h4>Assasins Creed</h4>
                </div>
            </div>

        </div>
    </div>

    <!-- moadl js -->
    <script src="./js/modal.js"></script>
    <!-- dark-mode -->
    <script src="./js/fb-clone-dark.js"></script>
    <!-- status carousel -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script>
        var flkty = new Flickity('.status', {
            // options
            cellAlign: 'left',
            groupCells: 5,
            freeScroll: true,
            pageDots: false
        });
    </script>

</body>

</html>