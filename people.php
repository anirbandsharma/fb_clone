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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fb-clone People</title>
    <link rel="stylesheet" href="./css/fb-clone.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<style>
    .main{
        width: 100%;
        padding: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .list{
        width: 100%;
        height: fit-content;
        background-color: white;
        border-radius: 0.5rem;
        padding: 10px;
    }
    .people{
        display: flex;
        align-items: center;
        justify-content: space-around;
    }
.people h4{
    width: 100%;
}
.people button{
    background-color: green;
    color: white;
    padding: 10px 30px;
    font-weight: 700;
    width: fit-content;
    border-radius: 0.5rem;
}
</style>    

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
                    <p><?php echo $fname; ?></p>
                </div>
                <button onclick="location.href='./fb-clone.php';">
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
                        <button onclick="location.href='fb-profile.html';">
                            <img src="images/avatar.jpg" alt="" class="avatar">
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

    <div class="main">

    <h2>Everyone on fakebook..</h2>

    <div class="list">

    <?php
                $queryfriend = "SELECT * FROM users WHERE NOT ( id = $id )";
                $resultfriend = mysqli_query($con, $queryfriend);

                while ($rowfriend = mysqli_fetch_array($resultfriend)) {
                    $uid = $rowfriend["id"];
                    $uname = $rowfriend["f_name"] . " " . $rowfriend["l_name"];


                    $sqlpeople = "SELECT * FROM users INNER JOIN friends ON users.id = friends.id WHERE friends.friend_id = $id AND friends.id = $uid";
                    $resultpeople = mysqli_query($con, $sqlpeople);
                    $rowpeople = mysqli_fetch_array($resultpeople);
                    $pname = $rowpeople["f_name"] . " " . $rowpeople["l_name"];

                    if($pname != $uname) {
                ?>
                
                <div class="people">
                <img src="images/avatar.jpg" class="avatar">
                        <h4><?php echo $uname; ?></h4>
                        <button onclick="location.href='friend_rqst.php?uid=<?php echo $uid; ?>';">ADD</button>
                </div>
                <center>
                    <div class="line"></div>
                </center>
                    <?php } else{ ?>
                        <div class="people">
                        <img src="images/avatar.jpg" class="avatar">
                                <h4><?php echo $uname; ?></h4>
                                <button disabled onclick="location.href='friend_rqst.php?uid=<?php echo $uid; ?>';" style="background-color: darkblue;">Friend</button>
                        </div>
                        <center>
                            <div class="line"></div>
                        </center>
                   <?php } ?>
                <?php } ?>

        </div>
    </div>

    <!-- moadl js -->
    <script src="./js/modal-noti.js"></script>
    <!-- dark-mode -->
    <script src="./js/fb-clone-dark.js"></script>
   

   
</body>

</html>