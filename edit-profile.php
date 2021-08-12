<!-- The Modal -->
<div id="myModal-editprofile" class="modal edit-modal">
                <div class="edit-modal-content">

                    <div class="edit-bar">
                        <h3 style="width: 55%; text-align:end;">Edit profile</h3>
                        <div id="close-edit"><h3>X</h3></div>
                    </div>
                    
                    <center>
                        <div class="line"></div>
                    </center>

                    <div class="edit-bar">
                        <h3>Profile picture</h3>
                        <a href="#">Edit</a>    
                    </div>

                    <center><img style=" width: 170px; border-radius: 50%;" src="<?php echo $pro_photo; ?>" alt=""></center>

                    <div class="edit-bar">
                        <h3>Cover photo</h3>
                        <a href="#">Edit</a>    
                    </div>

                    <center><img style=" width: 70%; border-radius: 0.5rem;" src="<?php echo $pro_photo; ?>" alt=""></center>

                    <div class="edit-bar">
                        <h3>Bio</h3>  
                    </div>
                    <input type="text" name="bio" placeholder="bio-variable">

                    <div class="edit-bar">
                        <h3>Bio</h3>  
                    </div>
                    <input type="text" name="bio" placeholder="bio-variable">

                    <div class="edit-bar">
                        <h3>Bio</h3>  
                    </div>
                    <input type="text" name="bio" placeholder="bio-variable">

                    <input type="submit" value="Save changes">

                </div>
            </div>
