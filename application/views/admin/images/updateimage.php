<?php echo form_open('');?>
<div>
    <a href="<?php echo $image['url']; ?>" target="_blank"><img class="admin-image-thumb mt-4 mb-4" src="<?php echo $image['url']; ?>" alt=""/></a>
    <div class="form-group">
        <label for="caption">Caption</label>
        <input type="text" class="form-control" id="caption" name="caption" value="<?php echo $image['caption']; ?>" placeholder="How do you want to caption this image?">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" placeholder="Provide a short description for this image"><?php echo $image['description']; ?></textarea>
    </div>
    <div class="error">
        <small class="danger"><?php echo (isset($error) ? $error : ''); ?></small>
    </div>
    
    <button type="submit" class="btn btn-primary">Update Image</button>
</div>
</form>