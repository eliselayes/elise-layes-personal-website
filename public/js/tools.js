$(document).ready(function() {
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
})