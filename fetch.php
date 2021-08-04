<?php
require_once 'connect.php';
if (isset($_POST['msg_id'])) {
    $msg_id = $_POST['msg_id'];
    $query = "SELECT * FROM posts INNER JOIN users ON posts.id = users.id where post_id <= $msg_id order by posts.post_id DESC LIMIT 3";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result)) {
        $msgID = $row['post_id'];
?>

<?php
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

            echo '

        <div class="feed-card" data-id="' . $msgID . '">
                    <div class="feed-card-title">
                        <img src="images/android.jpeg" alt="" class="avatar">
                        <div class="name">
                            <h4>' . $name . '</h4>
                            <p>' . $time. '</p>
                        </div>
                    </div>
                    <p>' . $post_detail . '</p>
                    ';
            $allowed = array('jpg', 'jpeg', 'png', 'uploads/');
            if (in_array($ext, $allowed)) {
                echo '
                    <img src="' . $photo . '" alt="" class="feed-post">
                        ';
            } else {
                echo '
                            <video width="100%" controls>
                            <source src="' . $photo . '" type="video/mp4">
                            </video>
                    ';
            }
            echo '
                    <div class="counters">
                        <div class="like">
                            <span class="material-icons" style="color: rgb(62, 165, 233); font-size: 17px;">
                                thumb_up
                            </span>
                            <p>503</p>
                        </div>
                        <div class="like">
                            <p>' . $comment_count[0] . ' comments 26 shares</p>
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
                    <div class="comment">
                        <center>
                            <div class="line"></div>
                        </center>
                        <div class="post-top">
                            <img src="images/avatar.jpg" class="avatar">
                            <div class="post-input">
                                <form action="comment.php?post_id=' . $post_id . '&id=' . $id . '" method="POST">
                                    <input type="text" name="comment" placeholder="Write a comment..." autocomplete="off">
                                </form>
                            </div>
                        </div>
                        ';
            while ($row2 = mysqli_fetch_array($result2)) {
                $com_id = $row2["com_id"];
                $name_c = $row2["f_name"] . " " . $row2["l_name"];
                $comment = $row2["comment"];
                $comment_time = $row2["comment_time"];

                echo '
                        <div class="comment-read">
                            <img src="images/avatar.jpg" class="avatar">
                            <div class="comment-detail">
                                <h5>' . $name_c . '</h5>
                                <p>' . $comment . '</p>
                            </div>
                        </div>
                        ';
            }
            echo ' 
                    </div>
                </div>
                ';
        } ?>

        <?php
    }
} else {
    // echo "Message ID is empty";
    echo "error while loading...";
}
        ?>