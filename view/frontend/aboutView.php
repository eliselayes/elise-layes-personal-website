<?php $title = 'A propos'; ?>
<?php include("tools.php"); ?>
<?php include("contact.php"); ?>
<?php include("menu.php"); ?>
<?php ob_start(); ?>

    <div class="container container-header">
        <div class="header-princ">
            <h1 class="title">&Agrave; propos</h1>
        </div>
    </div>

    <div class="row description chinois">
        <div class="titredescr col-sm-12">
            <h2><span>S</span>i j'étais...</h2>
        </div>
        <div class="textTitredescr">
            <p>
                <span>...un objet, je serais une liseuse</span>
                <br/>Un livre qui se tourne vers le numérique. <br/>
                C'est en effet après un parcours universitaire et professionnel dans les lettres, la philosophie, le Français Langue Etrangère et l'animation, que j'ai découvert le monde passionnant du web.
            </p>
            <p>
                <span>... un bruit, je serais, le cliqueti des touches de mon ordinateur.</span> <br/>
                Le bruit que j'entends le plus depuis 7 mois...
            </p>

            <p>
                <span>...une couleur, je serais du vert clair.</span> <br />
                Couleur des plantes au début du printemps, elle est celle de la vie, de l'optimisme et de la foi en l'avenir.
            </p>
            <p>
                <span>...une fleur, je serais une aubépine.</span> <br/>
                Un nom très poétique et une odeur qui me rappelle l'enfance.
            </p>
            <p>
                <span>...un animal, je serais un écureuil.</span> <br />
                Il est tellement mignon ! Et avec cela, prévoyant, agile et indépendant.
            </p>
            <p>
                <span>...un pays, je serais la Suisse.</span> <br/>
                C'est un pays où l'on parle plusieurs langues. C'est aussi un pays neutre qui ne cherche pas la confrontation. 
            </p>
        </div>

    </div>
    <div class="row competences">
        <div class="titrecomp col-sm-12">
            <h2><span>C</span>ompétences</h2>
        </div>
        <div class="text">
            <p>Intégration de maquettes</p>
            <p>Animation des pages web</p>
            <p>Applications des standards du web</p>
            <p>Réalisation de sites adaptés à tous types d'écran</p>
            <p>Amélioration du référencement naturel</p>
            <p>Interaction avec l'utilisateur en JavaScript</p>
            <p>Programmation en orienté objet (JavaScript et PHP)</p>
            <p>Gestion des comptes utilisateurs</p>
            <p>Conception de sites maintenables grâce à la gestion des erreurs</p>
            <p>Gestion de bases de données</p>
        </div>
    </div>

    <div class="row description formation">
        <div class="col-sm-12">
            <p><img src="public/images/oc.png" alt="logo openclassrooms"></p> 
            <p>Actuellement en formation <a href="https://openclassrooms.com/paths/developpeur-web-junior" target="_blank" rel="noopener" style="outline: none;">Développeur-se web junior</a>.</p>
        </div>
    </div>   
    
        <!-- Bootstrap core JavaScript
	  ================================================== -->
	  <!-- Placed at the end of the document so the pages load faster -->
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
  