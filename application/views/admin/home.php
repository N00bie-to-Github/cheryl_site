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
            <input type="hidden" name="route" value="keywords"/>
        </form>
    </div>

    <!-- Notification List -->
    <div class="card mb-4">
        <form method="post" action="">
            <div class="card-header">Site Contact Form Configuration</div>
            <div class="card-body">
                <div id="notification-list">
                    <div class="form-group">
                        <label for="keywords-textarea">Site Title</label>
                        <textarea class="form-control admin-textarea" id="keywords-textarea" name="contents" rows="2"><?php echo $contact_list['contents']; ?></textarea>
                        <small id="keywords-help" class="form-text text-muted">Add email addressed of the individuals to be notified from the contact form on the site. Separate email addresses by commas.</small>
                    </div>
                    <div class="form-group">
                        <label for="reply_message">Success Message</label>
                        <textarea class="form-control admin-textarea" id="reply_message" name="reply_message" rows="2"><?php echo $contact_list['reply_message']; ?></textarea>
                        <small id="reply-message-help" class="form-text text-muted">This message will be displayed once the contact form was submitted</small>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-secondary btn-sm">Update</button>
            </div>
            <input type="hidden" name="route" value="contacts"/>
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
            <input type="hidden" name="route" value="config"/>
        </form>
    </div>
</div>