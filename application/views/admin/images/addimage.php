<?php echo form_open_multipart('');?>
    <div class="form-group">
        <label for="username">File</label>
        <input type="file" class="form-control" id="file" name="file" autocomplete="off" placeholder="Select a file to upload">
    </div>
    <div class="form-group">
        <label for="caption">Caption</label>
        <input type="text" class="form-control" id="caption" name="caption" placeholder="How do you want to caption this image?">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" placeholder="Provide a short description for this image"></textarea>
    </div>
    <div class="error">
        <small class="danger"><?php echo (isset($error) ? $error : ''); ?></small>
    </div>

    <button type="submit" class="btn btn-primary">Upload Image</button>
</form>