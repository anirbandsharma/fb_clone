<!-- The Modal -->
<div id="myModal-editprofile" class="modal edit-modal">
    <div class="edit-modal-content">

        <div class="edit-bar">
            <h3 style="width: 55%; text-align:end;">Edit profile</h3>
            <div id="close-edit">
                <h3>X</h3>
            </div>
        </div>

        <center>
            <div class="line"></div>
        </center>

        <form id="upload_profile" action="edit-profile-pic.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
            <div class="edit-bar">
                <h3>Profile picture</h3>
                <input class="custom-file-input" type="file" name="profile_photo">
            </div>
        </form>
        <center><img style=" width: 170px; border-radius: 50%;" src="<?php echo $pro_photo; ?>" alt=""></center>

        <form id="upload_cover" action="edit-cover-pic.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">

            <div class="edit-bar">
                <h3>Cover photo</h3>
                <input class="custom-file-input" type="file" name="cover_photo">
            </div>
        </form>
        <form action="edit-profile1.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
            <center><img style=" width: 70%; border-radius: 0.5rem;" src="<?php echo $cover_photo; ?>" alt=""></center>

            <div class="edit-bar">
                <h3>Bio</h3>
            </div>
            <input class="edit-input" type="text" name="bio" value="<?php echo $bio; ?>" placeholder="Add bio">

            <div class="edit-bar">
                <h3>Work</h3>
            </div>
            <input class="edit-input" type="text" name="work" value="<?php echo $work; ?>" placeholder="Add work details">

            <div class="edit-bar">
                <h3>Relationship status</h3>
            </div>
            <select class="edit-input" name="relationship" id="">
                <option value="None" <?php if ($relationship == "None") {
                                            echo "selected";
                                        } ?>>Status</option>
                <option value="Single" <?php if ($relationship == "Single") {
                                            echo "selected";
                                        } ?>>Single</option>
                <option value="In a relationship" <?php if ($relationship == "In a relationship") {
                                                        echo "selected";
                                                    } ?>>In a relationship</option>
                <option value="In an open relationship" <?php if ($relationship == "In an open relationship") {
                                                            echo "selected";
                                                        } ?>>In an open relationship</option>
                <option value="It's complicated" <?php if ($relationship == "It's complicated") {
                                                        'selected';
                                                    } ?>>It's complicated</option>
                <option value="Engaged" <?php if ($relationship == "Engaged") {
                                            echo "selected";
                                        } ?>>Engaged</option>
                <option value="Married" <?php if ($relationship == "Married") {
                                            echo "selected";
                                        } ?>>Married</option>
                <option value="Separated" <?php if ($relationship == "Separated") {
                                                echo "selected";
                                            } ?>>Separated</option>
                <option value="Divorced" <?php if ($relationship == "Divorced") {
                                                echo "selected";
                                            } ?>>Divorced</option>
                <option value="Widowed" <?php if ($relationship == "Widowed") {
                                            echo "selected";
                                        } ?>>Widowed</option>
            </select>

            <div class="edit-bar">
                <h3>Contact</h3>
            </div>
            <input class="edit-input" type="text" name="contact" value="<?php echo $contact; ?>" placeholder="Add contact details">

            <center><input class="submit-btn" type="submit" value="Save changes"></center>

        </form>
    </div>
</div>

<script type="text/javascript">
    document.getElementById("upload_profile").onchange = function() {
        // submitting the form
        document.getElementById("upload_profile").submit();
    };

    document.getElementById("upload_cover").onchange = function() {
        // submitting the form
        document.getElementById("upload_cover").submit();
    };
</script>