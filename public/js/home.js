$(document).ready(function() {
    $(".apropos").show(2000);
    $(".portfolio").show(2500);
    $(".outils").show(3000);
    $(".blog").show(3500);
    $("#star1").show(5000);
    
    $(".menu_icon_burger").on("click", function() {
        $(".navTop").css('display', 'block');
        $("header").css('display', 'none');
    });
    
    $(".menu_icon_close").on("click", function() {
        $(".navTop").css('display', 'none');
        $("header").css('display', 'block');
    });
})
                