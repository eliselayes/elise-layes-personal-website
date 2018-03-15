<?php $title = 'A propos'; ?>
<?php include("templates/tools.php"); ?>
<?php include("templates/contact.php"); ?>
<?php include("templates/menu.php"); ?>
<?php ob_start(); ?>
    
<div class="container website-container container-header">
    <div class="header-princ">
        <h1 class="title">Portfolio</h1>
    </div>
</div>
<div class="jumbotron postitJumb">
    <img id="coffee" src="public/images/coffee.png" alt="coffee">
    <ul class="postitCont">
        <li class="postit">
            <a href="http://www.stephotostudio.fr/">
                <img class="bug" src="public/images/bug.png" alt="bug">
                <h2 class="portfolioH2">Stephoto Studio</h2>
                <p class="portfolioP"><img class="postitImg" src="public/images/stephotostudio.png" alt="stephotostudio"></p>
            </a>
        </li>
        <li class="postit">
        <a href="#">
            <img class="bug" src="public/images/bug.png" alt="bug">
            <h2 class="portfolioH2">Blog</h2>
            <p class="portfolioP"><img class="postitImg" src="public/images/alaska.png" alt="velib"></p>
        </a>
    </li>
    <li class="postit">
        <a href="#">
            <img class="bug" src="public/images/bug.png" alt="bug">
            <h2 class="portfolioH2">Velibs de Paris</h2>
            <p class="portfolioP"><img class="postitImg" src="public/images/velib.png" alt="velib"></p>
        </a>
    </li>
    <li class="postit">
        <a href="#">
            <img class="bug" src="public/images/bug.png" alt="bug">
            <h2 class="portfolioH2">OT Strasbourg</h2>
            <p class="portfolioP"><img class="postitImg" src="public/images/strasbourg.png" alt="velib"></p>
        </a>
    </li>
    <li class="postit">
        <a href="#">
            <img class="bug" src="public/images/bug.png" alt="bug">
            <h2 class="portfolioH2">Webagency</h2>
            <p class="portfolioP"><img class="postitImg" src="public/images/webagency.png" alt="velib"></p>
        </a>
    </li>
    </ul>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('templates/template.php'); ?>
