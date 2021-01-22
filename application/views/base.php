<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Martin Donk">
        <link rel="icon" href="img/favicon.ico">

        <title><?php echo $config['site_title']; ?></title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        
        <!-- Lightbox for images -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

        <!-- The script font for the nav bar -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">

    </head>

    <body>
        <div class="container text-center">
            <img src="img/logos/logo-large.png" alt="<?php echo SITE_TITLE; ?>" style="margin-top: 20px;" class="hidden-sm-down"/>
        </div>
        <nav class="navbar navbar-expand-md navbar-light bg-transparent">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item text-center">
                            <a class="nav-link <?php if($page === 'home') echo 'active'; ?>" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link <?php if($page === 'about us') echo 'active'; ?>" href="/about">About Us</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link <?php if($page === 'gallery') echo 'active'; ?>" href="/image_gallery">Gallery</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link <?php if($page === 'contact us') echo 'active'; ?>" href="/contact">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>

        <main role="main" class="container text-center">
            <div class="curly-border hidden-sm-down">
                <img src="img/clipart/curly_border.png"/>
            </div>
            <div id="content">
                <?php
                if(isset($content)) {
                    echo $content;
                }
                ?>
            </div>
        </main><!-- /.container -->
        <footer class="footer text-center">
            <div class="container">
                <span class="text-muted">&copy Copyright <?php echo date('Y'); ?> <a href="http://preciousmemoriesandevents.com/"> <?php echo $config['site_title']; ?></a> | All rights reserved</span>
            </div>
        </footer>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/vendor/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    </body>
</html>
