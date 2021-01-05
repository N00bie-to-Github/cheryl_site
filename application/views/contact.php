
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
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="about">About Us</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="/images">Gallery</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link disabled" href="/contact">Contact Us  <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>

        <main role="main" class="container text-center">
            <div class="curly-border hidden-sm-down">
                <img src="img/clipart/curly_border.png"/>
            </div>

            <div class="main">
                <div class="content-frm">
                    <!-- Display the status message -->
                    <?php if (!empty($status)) { ?>
                        <div class="status <?php echo $status['type']; ?>"><?php echo $status['msg']; ?></div>
                    <?php } ?>

                    <!-- Contact form -->
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" class="form-control" value="<?php echo!empty($postData['name']) ? $postData['name'] : ''; ?>" placeholder="Please provide your name.">
                            <?php echo form_error('name', '<p class="field-error">', '</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="text" id="email" name="email" class="form-control" value="<?php echo!empty($postData['email']) ? $postData['email'] : ''; ?>" placeholder="What's a good email address to reach you?">
                            <?php echo form_error('email', '<p class="field-error">', '</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control" value="<?php echo!empty($postData['subject']) ? $postData['subject'] : ''; ?>" placeholder="Please provide the subject you're contacting us about.">
                            <?php echo form_error('subject', '<p class="field-error">', '</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" class="form-control" placeholder="Provide a short message."><?php echo!empty($postData['message']) ? $postData['message'] : ''; ?></textarea>
                            <?php echo form_error('message', '<p class="field-error">', '</p>'); ?>
                        </div>

                        <input type="submit" name="contactSubmit" class="frm-submit" value="Submit">
                    </form>
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
