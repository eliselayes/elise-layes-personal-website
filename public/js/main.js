$(document).ready(function() {
    $(".apropos").show(2000);
    $(".portfolio").show(2500);
    $(".outils").show(3000);
    $(".contact").show(3500);
    $("#star1").show(5000);
    
    $(".menu_icon_burger").on("click", function() {
        $(".navTop").css('display', 'block');
        $("header").css('display', 'none');
    });
    
    $(".menu_icon_close").on("click", function() {
        $(".navTop").css('display', 'none');
        $("header").css('display', 'block');
    });

    
// Outils 
    
    /* when we click on "outils" in the menu... */
    $(".outils").on("click", function() {
        $(".navTop").css('display', 'none'); // the menu disappear
        if (window.matchMedia("(orientation: portrait)").matches) // if orientation portrait...
        {
            $(".postitJumb").css('display', 'none'); // the postit section disappear
            
        }
        $(".jumbotronOutils").css('display', 'block'); // the tools section appear  
    });
    
    /* when we click on the cross in the tools section... */
    $(".tools_icon_close").on("click", function() {
        $(".jumbotronOutils").css('display', 'none'); // the tools section disappear
        $(".postitJumb").css('display', 'block'); // the postit section reappear
        $(".navTop").css('display', 'block'); // the navigation menu reappear
    });
    
    
// Contact
    
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
});