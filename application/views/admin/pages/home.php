<div>
    <h3 class="mt-4">Home Main Content</h3>
    <form method="post" action="" id="quill-form">
        <div class="form-group">
            <label for="section2">Heading</label>
            <input type="text" value="<?php echo $page['section2']; ?>" class="form-control" id="section2" name="section2" placeholder="Type in heading">
        </div>
        <div class="form-group">
            <label for="password">Body</label>
            <div id="editor">
                <?php echo $page['section1']; ?>
            </div>
            <input type="hidden" name="section1" id="section1"/>
        </div>
        <button type="submit" class="btn btn-sm btn-dark mt-4">Save</button>
    </form>
</div>

<script>
    scripts.push(function () {
        $(document).ready(function () {
            var quill = new Quill('#editor', {
                theme: 'snow'
            });
            $("#quill-form").on("submit", function () {
                var html = quill.root.innerHTML;
                $("#section1").val(html);
            });
        });
    });
</script>