<?php $title = 'Article'; ?>

<?php ob_start(); ?>

<div class="blog-post">
    <h2 class="blog-post-title">Sample blog post</h2>
    <p class="blog-post-meta">
        <?= $post['creation_date_fr'] ?>
    </p>

    <p>
        <?= html_entity_decode($post['content']) ?>
    </p>
</div><!-- /.blog-post -->

<h2>Commentaires</h2>
    <div class= "comments">
    <?php
        while ($comment = $comments->fetch()) {
    ?>
        <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
        <p><?= nl2br(htmlspecialchars($comment['content'])) ?></p>
        <form action="index.php?action=deleteComment&amp;id=<?= $comment['id'] ?>" method="post">
            <input type="submit" value="Supprimer">
        </form>

    <?php
        }
    ?>
    </div>

<?php $content = ob_get_clean(); ?>      
      


<?php require('templates/blog.php'); ?>