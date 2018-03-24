<?php $title = 'Article'; ?>

<?php ob_start(); ?>
<share>
  <comment>
<div class="blog-post">
    <h2 class="blog-post-title"><?= $post['title']; ?></h2>
    <p class="blog-post-meta"><?= $post['creation_date_fr'] ?></p>
    <p><?= html_entity_decode($post['content']) ?></p>
</div><!-- /.blog-post -->
      </comment>
  <visibility>
    <code>anyone</code>
  </visibility>
    <form class="log commentForm" action="https://api.linkedin.com/v1/people/~/shares?format=json" method="post">
        <div class="containElmForm submit"><input type="submit" />
        </div>
    </form>
</share>

<a class="twitter-share-button" href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<h2>Commentaires</h2>
    <form class="log commentForm" action="index.php?action=addComment&amp;id=<?= $_GET['id'] ?>" method="post">
        <div>
            <div class="containElmForm containElmFormComm"><label for="author">Auteur</label><br />
            </div>
            <div class="containElmForm containElmFormComm"><input type="text" id="author" name="author" />
            </div>
        </div>
        <div>
            <div class="containElmForm"><label for="comment">Commentaire</label><br />
            </div>
            <div class="containElmForm"><textarea id="comment" name="comment"></textarea>
            </div>
        </div>
        <div>
            <div class="containElmForm submit"><input type="submit" />
            </div>
        </div>
    </form>

    <div class= "comments">
    <?php
        while ($comment = $comments->fetch()) {
    ?>
        <div class = "commentsCont">
            <p><?= nl2br(htmlspecialchars($comment['content'])) ?></p>
            <p class = "legendComment">Rédigé par <strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
        </div>

    <?php
    }
    ?>
    </div>
    

    

<?php $content = ob_get_clean(); ?>      


<?php ob_start(); ?>
    <div class="sidebar-module">
        <h4>Archives</h4>
        <ol class="list-unstyled">
        <?php
            while ($data = $months->fetch()) {
        ?>
                <li><a href="index.php?action=seePostsPerMonth&amp;m=<?= $data['m'] ?>"><?= $data['mois']; ?> <?= $data['y']; ?></a></li>
        <?php
            }
        $months->closeCursor();
        ?>
        </ol> 
    </div>
    <div class="sidebar-module">
        <h4>Liens</h4>
        <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
        </ol>
    </div>
<?php $sidebar = ob_get_clean(); ?>
      


<?php require('templates/blog.php'); ?>