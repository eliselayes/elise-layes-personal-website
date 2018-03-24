<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="public/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">

    <title>Modification d'article</title>

    <!-- Bootstrap core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="public/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="public/css/style.css" rel="stylesheet">
    <link href="public/css/blog-style.css" rel="stylesheet">


    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ 
      selector:'textarea',
      language_url : 'public/js/tinymce/langs/fr_FR.js',
      language: 'fr_FR',
    });</script>
  </head>

  <header id="header-editor">
    <h1 id="editor-title">Bienvenue !</h1>
  </header>
  <body id="editor">
    <form action="index.php?action=modifyPost&amp;id=<?= $post['id'] ?>" method="post">
        <label class="containElmForm" for="title">Titre :</label><input type="text" name="title" id="title" value= "<?= $post['title'] ?>"/><br />
        <label class="containElmForm" for="category">Catégorie :</label><input type="text" name="category" id="category" value= "<?= $post['category'] ?>"/><br />
        <textarea name="content" id="content"><?= html_entity_decode($post['content']) ?></textarea>
        <input class="containElmForm" id="sendPost" type="submit" value="Enregistrer" />
    </form>
    <p id="editor-back"><a href="index.php?action=editText">Retour</a></p>      
  </body>

</html>