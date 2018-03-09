<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>
<?php include("tools.php"); ?>
<?php include("contact.php"); ?>

<div class="jumbotron jumbotronPres">
    <div class="container presentation">
        <img id="star1" src="public/images/star.svg" alt="">
        <div class="col-sm-4 col-sm-offset-4 colPres">
            <h2>Elise Layes</h2>
            <p>Développeuse web junior</p>
        </div>
    </div>
    <div class="container nav">
        <img id="star2" src="public/images/star2.png" alt="">
        <div class="row apropos">
            <div class="col-sm-2 col-sm-offset-5">
                <a href="index.php?action=about">A PROPOS</a>
            </div>
        </div>

        <div class="row portfolio">
            <div class="col-sm-2 col-sm-offset-5">
                <a href="index.php?action=portfolio">PORTFOLIO</a>
            </div>
        </div>

        <div class="row outils">
            <div class="col-sm-2 col-sm-offset-5">
                <a class="outils" href="#">OUTILS</a>
            </div>
        </div>

        <div class="row contact">
            <div class="col-sm-2 col-sm-offset-5">
                <a class="contact">BLOG</a>
            </div>
        </div>
        <div class=" empty">
            <div class="bordRight2"></div>
            <div class="bordLeft2"></div>
        </div>
        <div class="row blog">
            <div class="col-sm-12">
                <p><a href ="#" class="contactWin">Contact</a></p>
                <p><img id="star3" src="public/images/star2.png" alt=""></p>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>