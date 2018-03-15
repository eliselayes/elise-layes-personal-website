<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?= $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="public/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="public/css/style.css" rel="stylesheet">
    <link href="public/css/blog-style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="public/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
        
        <div class="blog-masthead">
            <div class="container">
                <nav class="blog-nav">
                    <div class="blog-header">
                        <h1 class="blog-title">Le blog d'<span>&Eacute;lise Layes</span></h1>
                    </div>
                    <a class="blog-nav-item" href="index.php?action=sendText">Rédiger mes articles</a>
                    <a class="blog-nav-item" href="index.php?action=editText">Gérer mes articles</a>
                    <a class="blog-nav-item" href="index.php?action=changePass">Changer le mot de passe</a>
                </nav>
            </div>
        </div>

        <div class="container blog-container">
            

            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 blog-main">
                    <?= $content ?>
                </div><!-- /.blog-main -->
            </div><!-- /.row -->
        </div><!-- /.container -->

        <footer class="blog-footer">
            <p>
                <a href="#">Haut de la page</a>
                <a id="return" href="index.php?action=blog">Retour au blog</a>
            </p>
        </footer>




        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="public/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="public/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>