<div class="pageContact">
    <div class=row>
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <form method="post" action="index.php?action=contact" id="pageContact" onsubmit="return isValid():">
                <a href="#" class="contact_icon_close"><img src="public/images/close.png"></a>
                <fieldset>
                    <legend>CONTACTEZ-MOI !</legend>
                <label for= "contactNom">
                    Nom :
                </label>
                <input name="nom" class="champTexte" id="contactNom" value ="Nom" onfocus="changeCasse(this, true)"> 
                <br/>
                <label for= "contactPrenom">
                    Prénom :
                </label>
                <input name="prenom" class="champTexte" id="contactPrenom" value ="Prénom" onfocus="changeCasse(this, true)"> 
                <br/>
                <label for="contactMail">
                    Adresse mail :
                </label>
                <input name="courriel" class="champTexte" id="contactMail" value ="Adresse mail" onfocus="changeCasse(this, true)"> 
                <br/>
                <label for="contactObjet">
                    Objet :
                </label>
                <input name="objet" class="champTexte" id="contactObjet" value ="Objet" onfocus="changeCasse(this, true)"> 
                <br/>
                <label>
                    Message :
                </label>
                <textarea name="message" rows="10" cols="100"></textarea>
                <br/>
                <p>Tous les champs sont obligatoires</p>
                <div class="submit"><input id="submit" type="submit" value="Envoyer" /></div>
                </fieldset>
            </form>
           </div>
        <div class="col-md-2">
        </div>
    </div>
</div> 