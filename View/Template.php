<!DOCTYPE html>
<html lang="fr">
    
<head>

    <meta charset="utf-8">
    <!-- CDu = pour localhost -->
    <base href="/CDu_LeBlog/">

    <!-- CDu = pour inline <base href="/"> -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Le blog de Carole DUVAL">
    <meta name="author" content="Carole DUVAL">

    <title>CDu - Le Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="content/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="content/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="content/css/clean-blog.min.css" rel="stylesheet">

</head>

<body>
<div class="container-fluid">
    <div class="container">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="Accueil">monblog.carole-duval</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Blog/index/1">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Form">Créer un article</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('Content/img/ecranpt2.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 mx-auto">
                    <div class="page-heading">
                        <div class="row" style="align-items:center;">
                            <div class="col-lg-3 col-md-10 mx-auto" >
                                <a href=""><img src="Content/img/logoCDu.png" /></a>
                            </div>
                            <div class="col-lg-9 col-md-10 mx-auto">
                                <h1>Carole DUVAL</h1>
                                <span class="subheading">L'Alliance de la Qualité et des Technologies Informatiques</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

    <!-- Main Content -->
    <?php if(isset($posts["messageConfirmation"])) ?>
    <div class="container" id="confirmation">
        <div class="row">
            <div class="col-lg-11 col-md-12 mx-auto">
                <div id="messageconfirmation" class="blue"><?php {echo $posts["messageConfirmation"] ?></div>
            </div>
        </div>
    </div>
    <?php  ;} ?>
    <div id="contenu">
        <?= $contenu ?>
    </div> <!-- #contenu -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a href="https://openclassrooms.facebook.com/profile.php?id=100016853288099">
                                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://linkedin.com/in/carole-duvalL">
                                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                  </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://github.com/caroleduval/">
                                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Site réalisé par Carole Duval [CDu]. Septembre 2017. Dans le cadre d'une formation OC.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="Content/vendor/jquery/jquery.min.js"></script>
    <script src="Content/vendor/popper/popper.min.js"></script>
    <script src="Content/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="Content/js/clean-blog.min.js"></script>
    
    <!-- Contact Form JavaScript -->
    <script src="Content/js/jqBootstrapValidation.js"></script>
    <script src="Content/js/contact_me.js"></script>



</body>

</html>