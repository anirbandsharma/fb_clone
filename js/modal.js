 // Get the modal
 var modal = document.getElementById("myModal");
 var modal2 = document.getElementById("myModal2");

 var modal_notification = document.getElementById("myModal-notification");

 var modalPost = document.getElementById("myModal-post");

 var modalEdit = document.getElementById("myModal-editprofile");


 // Get the button that opens the modal
 var btn = document.getElementById("myBtn");
 var btn2 = document.getElementById("myBtn2");
 var btn3 = document.getElementById("myBtn3");

 var btn_notification = document.getElementById("myBtn-notification");
 
 var btnPost = document.getElementById("myBtn-post");

 var editBtn = document.getElementById("edit-profile-btn");
 var close_editBtn = document.getElementById("close-edit");

 // When the user clicks the button, open the modal 
 btn.onclick = function () {
     modal.style.display = "block";
 }
 btn2.onclick = function () {
     modal.style.display = "none";
     modal2.style.display = "block";
 }
 btn3.onclick = function () {
     modal2.style.display = "none";
     modal.style.display = "block";
 }

btn_notification.onclick = function () {
    modal_notification.style.display = "block";
}

 btnPost.onclick = function () {
    modalPost.style.display = "block";
    document.body.style.overflow = "hidden";
}

editBtn.onclick = function () {
    modalEdit.style.display = "block";
    document.body.style.overflow = "hidden";
}

close_editBtn.onclick = function () {
    modalEdit.style.display = "none";
    document.body.style.overflow = "auto";
}

 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function (event) {
     if (event.target == modal) {
         modal.style.display = "none";
     }
     if (event.target == modal2) {
         modal2.style.display = "none";
     }
     if (event.target == modal_notification) {
        modal_notification.style.display = "none";
    }
     if (event.target == modalPost) {
        modalPost.style.display = "none";
        document.body.style.overflow = "auto";
    }
 }