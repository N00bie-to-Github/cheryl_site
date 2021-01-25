<div id="images">
    <div class="user-header mb-4 text-right">
        <a href="/admin/images/add" class="btn btn-success" title="Add a new image to your gallery.">Add Image</a>
    </div>
    
    <table id="images-table" class="w-100 table table-striped">
        <thead>
            <tr>
                <th>Image</th>
                <th title="This is a caption for your image. You should try to add a caption for all your images.">Caption</th>
                <th title="This is the order in which the image appears in the gallery.">Order</th>
                <th title="Update your image properties."></th>
                <th title="Delete your image."></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($images as $image):?>
            <tr>
                <td width="150"><a href="<?php echo $image['url']; ?>" target="_blank"><img class="admin-image-thumb" src="<?php echo $image['url']; ?>" alt=""/></a></td>
                <td class="align-bottom"><?php echo $image['caption']; ?></td>
                <td class="align-bottom" width="100"><?php echo $image['sort_order']; ?></td>
                <td class="align-bottom" width="60"><a class="btn btn-info btn-sm" href="/admin/images/update/<?php echo $image['id']; ?>">Update</a></td>
                <td class="align-bottom" width="60"><a class="btn btn-danger btn-sm delete" href="/admin/images/delete/<?php echo $image['id']; ?>">Delete</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    scripts.push(function () {
        $(document).ready(function () {
            $('#images-table').DataTable({
                "autoWidth": false
            });
            
            $('.delete').click(function(e) {
                if(!confirm("You're about to delete an image. Are you sure?")) {
                    e.preventDefault();
                }
            });
        });
    });
</script>