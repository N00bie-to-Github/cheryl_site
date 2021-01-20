<div>
    <div class="card mb-4">
        <form method="post" action="">
            <div class="card-header">Keywords</div>
            <div class="card-body">
                <div id="keywords">
                    <textarea class="form-control admin-textarea" id="keywords-textarea" name="keywords" rows="4"><?php echo $keywords['contents']; ?></textarea>
                    <small id="passwordHelpBlock" class="form-text text-muted">Add keywords that describe your site, separated by commas. <i class="fa fa-exclamation-circle"></i> Note that spaces will be converted to commas.</small>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-secondary btn-sm">Update</button>
            </div>
        <input type="hidden" name="form" value="keywords"/>
        </form>
    </div>

</div>