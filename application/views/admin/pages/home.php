<div>
    <h3 class="mt-4">Home Main Content</h3>
    <form method="post" action="" id="quill-form">
        <div id="editor">
            <?php echo $page['section1']; ?>
        </div>
        <input type="hidden" name="section1" id="section1"/>
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