$( ".change" ).on("click", function() {
    if( $( "body" ).hasClass( "dark" )) {
        $( "body" ).removeClass( "dark" );
        
        $("body").css("background-color", "rgb(227, 233, 235)");
        $("body").css("color", "");

        $("nav").css("background-color", "white");
        $(".post").css("background-color", "white");
        $(".feed-card").css("background-color", "white");
        $(".modal-content").css("background-color", "white");
        $(".birthday").css("background-color", "white");

        $("nav .material-icons").css("color", "");
        $(".feed-card-title").css("color", "black");
        $(".feed-card-title p").css("color", "gray");
        $(".like").css("color", "gray");
        $(".modal-content").css("color", "black");
        $(".modal-content button").css("color", "black");
        $(".modal-content span").css("color", "black");

    } else {
        $( "body" ).addClass( "dark" );

        $("body").css("background-color", "black");
        $("body").css("color", "white");

        $("nav").css("background-color", "#272727");
        $(".post").css("background-color", "#272727");
        $(".feed-card").css("background-color", "#272727");
        $(".modal-content").css("background-color", "#272727");
        $(".birthday").css("background-color", "#272727");
        
        $("nav span").css("color", "white");
        $(".feed-card-title").css("color", "white");
        $(".feed-card-title p").css("color", "white");
        $(".like").css("color", "white");
        $(".modal-content").css("color", "white");
        $(".modal-content button").css("color", "white");
        $(".modal-content span").css("color", "white");
    }
});