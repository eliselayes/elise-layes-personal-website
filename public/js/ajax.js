$(document).ready(function() {
    function ajaxGet(url, callback) {
        var req = new XMLHttpRequest();
        req.open('GET', url);
        req.addEventListener("load", function () {
            if (req.status >= 200 && req.status < 400) {
                // Appelle la fonction callback en lui passant la réponse de la requête
                callback(req.responseText);
            } else {
                console.error(req.status + " " + req.statusText + " " + url);
            }
        });
        req.addEventListener("error", function () {
            console.error("Erreur réseau avec l'URL " + url);
        });
        req.send(null);
    }
    
    ajaxGet('https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id=860rit99t22ayx&redirect_uri=http://elise-layes.fr&state=987654321&scope=r_basicprofile&format=json', function(response) {
        console.log(response);
    })

})