<?php $title = 'Articles par mois'; ?>

<?php ob_start(); ?>

    <div class="blog-post">
    <?php
        while ($data = $postsPerMonth->fetch()) {
    ?>
            <h2 class="blog-post-title">Sample blog post</h2>
            <p class="blog-post-meta">
            <?= $data['creation_date_fr'] ?>
            </p>

            <p>
            <?= html_entity_decode($data['short_content']); ?>...
            </p>
            <a href="index.php?action=seeOnePost&amp;id=<?= $data['id'] ?>">  lire la suite... </a>
    <?php
        } 
    $postsPerMonth->closeCursor();
    ?>
    </div><!-- /.blog-post -->

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
