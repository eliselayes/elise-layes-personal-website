$(document).ready(function() {
/* when we click on "contact" in the menu... */
    $(".contactWin").on("click", function() {
        $(".navTop").css('display', 'none'); // the menu disappear
        if (window.matchMedia("(orientation: portrait)").matches) // if orientation portrait...
        {
            $(".postitJumb").css('display', 'none'); // the postit section disappear
            $(".jumbotronPres").css('display', 'none'); // the postit section disappear
        }
        $(".pageContact").css('display', 'block'); // the contact section appear
    });
    
    /* when we click on the cross in the contact section... */
    $(".contact_icon_close").on("click", function() {
        $(".pageContact").css('display', 'none'); // the tools section disappear
        $(".postitJumb").css('display', 'block'); // the postit section reappear
        $(".navTop").css('display', 'block'); // the navigation menu reappear
    });
    
    
    $("nav-blog").on("click", function() {
        $("nav-blog").css('text-decoration', 'underline');
    })
})