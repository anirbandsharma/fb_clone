 // Get the modal
 var modal = document.getElementById("myModal");
 var modal2 = document.getElementById("myModal2");
 var modalPost = document.getElementById("myModal-post");
 // Get the button that opens the modal
 var btn = document.getElementById("myBtn");
 var btn2 = document.getElementById("myBtn2");
 var btn3 = document.getElementById("myBtn3");
 var btnPost = document.getElementById("myBtn-post");

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
 btnPost.onclick = function () {
    modalPost.style.display = "block";
    document.body.style.overflow = "hidden";
}

 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function (event) {
     if (event.target == modal) {
         modal.style.display = "none";
     }
     if (event.target == modal2) {
         modal2.style.display = "none";
     }
     if (event.target == modalPost) {
        modalPost.style.display = "none";
        document.body.style.overflow = "auto";
    }
 }