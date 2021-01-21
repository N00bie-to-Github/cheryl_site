<form method="post" action="">
    <div class="alert alert-danger" role="alert">
        <i class="fa fa-exclamation-triangle"></i> Caution. This password changer is very permissive. Please do not leave blank or pick a weak password. Doing so leaves your site open to hacking.
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" autocomplete="off" placeholder="Type in a username">
    </div>
    <div class="form-group">
        <label for="password">New Password</label>
        <input type="password" class="form-control" id="password" name="password" autocomplete="new-password" placeholder="Type in password">
    </div>
    <div class="form-group">
        <label for="password2">Confirm New Password</label>
        <input type="password" class="form-control" id="password2" name="password2" autocomplete="new-password" placeholder="Type in password again">
    </div>
    <div class="error">
        <small class="danger"><?php echo (isset($error) ? $error : ''); ?></small>
    </div>

    <button type="submit" class="btn btn-primary">Change password</button>
</form>