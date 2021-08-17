<!-- The Modal -->
<div id="myModal-notification" class="modal">
    <div class="modal-content notification-modal">

        <div class="modal-options active">
            <h3><b>Notifications</b></h3>
        </div>

        <div class="modal-options">
            <button onclick="location.href='people.php';">
            <span class="material-icons con">
                        search
                    </span>
                <h3>Find people.</h3>
            </button>
        </div>
        <center>
            <div class="line"></div>
        </center>

        <?php
                $queryrqst = "SELECT * FROM friend_rqst INNER JOIN users ON friend_rqst.friend_id = users.id WHERE friend_rqst.id = $id ";
                $resultrqst = mysqli_query($con, $queryrqst);

                while ($rowrqst = mysqli_fetch_array($resultrqst)) {
                    $rid = $rowrqst["id"];
                    $rphoto = $rowrqst["profile_photo"];
                    $rname = $rowrqst["f_name"] . " " . $rowrqst["l_name"];
                ?>

        <div class="modal-options">
            <button onclick="location.href='fb-profile.php?uid=<?php echo $rid; ?>';">
                <img src="<?php echo $rphoto; ?>" alt="" class="avatar">
                <div class="text">
                    <p><b><?php echo $rname; ?></b> sent you a friend request.</p>
                    <!-- <p>See the profile.</p> -->
                </div>
            </button>
        </div>
        <div class="modal-options">
            <button class="rqst" style="background-color: rgb(24, 128, 226); color: white;" onclick="location.href='accept_rqst.php?rid=<?php echo $rid; ?>';"><h4>Accept</h4></button>
            <button class="rqst" style="background-color: lightgray;" onclick="location.href='reject_rqst.php?rid=<?php echo $rid; ?>';"><h4>Reject</h4></button>
        </div>

        <center>
            <div class="line"></div>
        </center>

        <?php } ?>

    </div>
</div>