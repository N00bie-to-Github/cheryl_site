<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Martin Donk">
        <link rel="icon" href="img/favicon.ico">

        <title><?php echo SITE_TITLE; ?> | Admin - Login</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/admin_style.css" rel="stylesheet">

        <!-- The script font for the nav bar -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="login text-center">
            <img src="img/logos/logo-large.png" alt="<?php echo SITE_TITLE; ?>" style="margin-top: 20px;" class="hidden-sm-down"/>
            <form method="post" action="">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="error"><?php echo $error; ?></div>
                <button type="submit" class="btn btn-danger">Log In</button>
            </form>
        </div>
    </body>
</html>
