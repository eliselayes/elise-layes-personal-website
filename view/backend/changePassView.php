<?php $title = 'Modification du mot de passe'; ?>

<?php ob_start(); ?>
    <div id="changePass">
        <h2>Modification du mot de passe</h2>

        <form class="log" action="index.php?action=changePass" method="post">
            <label class="containElmForm" for="pass">Nouveau mot de passe :</label><input type="text" name="pass" id="pass" /><br />
            <input class="containElmForm" id="pass" type="submit" value="Enregistrer" />
        </form>
    </div>


<?php $content = ob_get_clean(); ?>

<?php require('templates/blog.php'); ?>