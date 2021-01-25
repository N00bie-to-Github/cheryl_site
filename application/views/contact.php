<div class="main">
    <div class="content-frm">
        <!-- Display the status message -->
        <?php if(!empty($status)) { ?>
            <div class="alert alert-<?php echo $status['type']; ?>"><?php echo $status['message']; ?></div>
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