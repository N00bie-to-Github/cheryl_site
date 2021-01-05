
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Martin Donk">
        <link rel="icon" href="img/favicon.ico">

        <title><?php echo SITE_TITLE; ?></title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">

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
                            <a class="nav-link disabled" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="/about">About Us</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="/images">Gallery</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="/contact">Contact Us</a>
                        </li>
                        <!--
                        <li class="nav-item dropdown text-center">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        -->
                    </ul>
                    <!--                    <form class="form-inline my-2 my-lg-0">
                                            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                        </form>-->
                </div>
            </div>

        </nav>

        <main role="main" class="container text-center">
            <div class="curly-border hidden-sm-down">
                <img src="img/clipart/curly_border.png"/>
            </div>

            <div class="main">
                <div id="intro">
                    <h1>Precious Memories and Events, Inc.</h1>
                    <p>
                        With our incredibly high standards and creativity, Precious Memories and Events Inc. will exceed your expectations and create the most memorable experience for your event. We will translate your goals and objectives into a stunning and one of a kind soiree. We work with our clients as a partner to create a unique event that will meet their expectations.
                        Precious Memories and Events Inc. offers a wide variety of event planning services, and we are dedicated to providing our clients with a seamless and enjoyable experience from start to finish. Our event planning services are available to all clients needing guidance throughout their event planning process. Whether you are planning a small family gathering, a baby shower, or a more elaborate event, Precious Memories and Events Inc. will work with you to create a unique, personalized, and stylish affair.
                        We look forward to learning more about you and your vision for your next event!
                    </p>


                </div>
                <div id="carousel" class="carousel slide shadow-carousel" data-ride="carousel" style="background: black; height: 500px;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/slideshow/A.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/slideshow/B.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/slideshow/C.jpg" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>

        </main><!-- /.container -->
        <footer class="footer text-center">
            <div class="container">
                <span class="text-muted">&copy Copyright <a href="http://preciousmemoriesandevents.com/"><?php echo SITE_TITLE; ?></a> | All rights reserved</span>
            </div>
        </footer>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/vendor/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>
