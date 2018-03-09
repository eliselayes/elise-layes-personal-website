<?php $title = 'A propos'; ?>
<?php include("tools.php"); ?>
<?php include("contact.php"); ?>
<?php include("menu.php"); ?>
<?php ob_start(); ?>
    
<div class="container container-header">
    <div class="header-princ">
        <h1 class="title">Portfolio</h1>
    </div>
</div>
<div class="jumbotron postitJumb">
    <ul class="postitCont">
        <li class="postit">
            <a href="http://www.stephotostudio.fr/">
                <img class="bug" src="public/images/bug.png" alt="bug">
              <h2 class="portfolioH2">Stephoto Studio</h2>
              <p class="portfolioP"><img class="postitImg" src="public/images/stephotostudio2.png" alt="stephotostudio"></p>
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
            <p class="portfolioP"><img class="postitImg" src="public/images/velib2.png" alt="velib"></p>
        </a>
    </li>
    <li class="postit">
        <a href="#">
            <img class="bug" src="public/images/bug.png" alt="bug">
            <h2 class="portfolioH2">OT Strasbourg</h2>
            <p class="portfolioP"><img class="postitImg" src="public/images/otstrasbourg2.png" alt="velib"></p>
        </a>
    </li>
    <li class="postit">
        <a href="#">
            <img class="bug" src="public/images/bug.png" alt="bug">
            <h2 class="portfolioH2">Webagency</h2>
            <p class="portfolioP"><img class="postitImg" src="public/images/webagency2.png" alt="velib"></p>
        </a>
    </li>
    <li class="postit">
        <a href="#">
            <img class="bug" src="public/images/bug.png" alt="bug">
            <h2 class="portfolioH2">Webagency</h2>
            <p class="portfolioP"><img class="postitImg" src="public/images/webagency2.png" alt="velib"></p>
        </a>
    </li>
    </ul>
</div>

    <!--<div class="container container-header">
            <div class="header-princ">
                <h1 class="title">Portfolio</h1>
            </div>
        </div>
    <div class="jumbotron">
        <div class="container portfolio">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5 stephoto">
                    <a href="http://www.stephotostudio.fr/" target="_blank" rel="noopener" style="outline: none;">
                        <div class="img_and_descr">
                            <img src="public/images/stephotostudio2.png" alt="stephotostudio">
                            <div class="img_description">
                                <h2>Stephotostudio</h2>
                                <p>Site Wordpress d'une photographe</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-5 velib">
                    <a href="http://velib.david-gerard-online.fr/" target="_blank" rel="noopener" style="outline: none;">
                        <div class="img_and_descr">
                            <img src="public/images/velib2.png" alt="velib">
                            <div class="img_description">
                                <h2>Velibs de Paris</h2>
                                <p>Projet d'étude : application en JavaScript</p>
                            </div>
                        </div>         
                    </a>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row webagency_stra">
                <div class="col-md-1"></div>
                <div class="col-md-5 webagency">
                        <a href="http://projet-webagency-elise-layes.david-gerard-online.fr/" target="_blank" rel="noopener" style="outline: none;">
                            <div class="img_and_descr">
                                <img src="public/images/webagency2.png" alt="webagency">
                                <div class="img_description">
                                    <h2>Webagency</h2>
                                    <p>Projet d'étude : intégration de maquette</p>
                                </div>
                            </div>
                        </a>
                </div>
                <div class="col-md-5 strasbourg">
                    <a href="http://otstrasbourg.david-gerard-online.fr/" target="_blank" rel="noopener" style="outline: none;">
                        <div class="img_and_descr">
                            <img src="public/images/otstrasbourg2.png" alt="ocstrasbourg">
                            <div class="img_description">
                                <h2>OT Strasbourg</h2>
                                <p>Projet d'étude : site Wordpress</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-1"></div>
            </div> 
        </div> 
    </div> -->

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
