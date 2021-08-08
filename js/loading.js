function getthedata() {
    var msg_id = $(".feed-card:last").data("id");
    $("#msg_loader").show();
    $.ajax({
        type: "POST",
        url: "fetch.php",
        data: {
            msg_id: msg_id
        },
        cache: false,
        success: function(data) {
            //Insert data after the message_box 
            $(".feed-card:last").after(data);
            // $("#msg_loader").hide();
        }
    });
}
        
        $(document).ready(function() {
            $(window).on('scroll', onScroll);
                function onScroll() {
                if ($(window).scrollTop() == $(document).height() - $(window).height()) {
                 getthedata();
                }
            };
        });
