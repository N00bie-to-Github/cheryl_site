<div>
    <!-- Keywords -->
    <div class="card mb-4">
        <form method="post" action="">
            <div class="card-header">Keywords</div>
            <div class="card-body">
                <div id="keywords">
                    <textarea class="form-control admin-textarea" id="keywords-textarea" name="keywords" rows="4"><?php echo $keyword_list['contents']; ?></textarea>
                    <small id="passwordHelpBlock" class="form-text text-muted">Add keywords that describe your site, separated by commas. <i class="fa fa-exclamation-circle"></i> Note that spaces will be converted to commas.</small>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-secondary btn-sm">Update</button>
            </div>
            <input type="hidden" name="form" value="keywords"/>
        </form>
    </div>

    <!-- Notification List -->
    <div class="card mb-4">
        <form method="post" action="">
            <div class="card-header">Contact Emails</div>
            <div class="card-body">
                <div id="notification-list">
                    <textarea class="form-control admin-textarea" id="keywords-textarea" name="contacts" rows="4"><?php echo $contact_list['contents']; ?></textarea>
                    <small id="passwordHelpBlock" class="form-text text-muted">Add email addressed of the individuals to be notified from the contact form on the site. Separate email addresses by commas.
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-secondary btn-sm">Update</button>
            </div>
            <input type="hidden" name="form" value="contacts"/>
        </form>
    </div>

    <!-- Site Config -->
    <div class="card mb-4">
        <form method="post" action="">
            <div class="card-header">Site Configuration</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="site-title">Site Title</label>
                    <input type="text" class="form-control" id="site-title" name="site_title" placeholder="Precious Memories & Events" value="<?php echo $site_config['site_title']; ?>">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-secondary btn-sm">Update</button>
            </div>
            <input type="hidden" name="form" value="config"/>
        </form>
    </div>
</div>