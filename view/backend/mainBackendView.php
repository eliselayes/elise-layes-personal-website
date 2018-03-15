<?php $title = 'Page principale backend'; ?>

<?php ob_start(); ?>
<div class="container">  
    <div class="row">
        <div class="col-sm-12" id="mainBackend">
            <div class="select select1"><img src="public/images/star2.png" alt=""><a href="index.php?action=sendText">Rédiger mes articles</a></div>
            <div class="select select2"><img src="public/images/star2.png" alt=""><a href="index.php?action=editText">Gérer mes articles</a></div>
            <div class="select select3"><img src="public/images/star2.png" alt=""><a href="index.php?action=changePass">Changer le mot de passe</a></div>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('templates/blog.php'); ?>