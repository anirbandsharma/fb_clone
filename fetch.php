<?php
require_once 'connect.php';

session_start();
if (!$_SESSION['email']) {
    header("LOCATION: index.php");
}
$email = $_SESSION['email'];

include './connect.php';
$sql = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
$row1 = mysqli_fetch_array($sql);
$id = $row1["id"];

if (isset($_POST['msg_id'])) {
    $msg_id = $_POST['msg_id'];
    $query = "SELECT * FROM posts INNER JOIN users ON posts.id = users.id where post_id < $msg_id order by posts.post_id DESC LIMIT 3";
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
                       <div class="like" onclick="location.href='like.php?post_id=<?php echo $post_id; ?>&id=<?php echo $id; ?>';" 
                       <?php 
                       if($countlike[0]==0){
                        echo 'style="color:rgb(128, 128, 128);">
                        <span style="color:gray;" class="material-icons">
                            thumb_up
                        </span> ';} 
                        else{
                            echo 'style="color:rgb(32, 115, 184);">
                        <span style="color:rgb(32, 115, 184);" class="material-icons">
                            thumb_up
                        </span> ';
                        }?>
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
                    <div class="comment">
                        <center>
                            <div class="line"></div>
                        </center>
                        <div class="post-top">
                            <img src="images/avatar.jpg" class="avatar">
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
                
} else {
    // echo "Message ID is empty";
    echo "error while loading...";
}
        ?>