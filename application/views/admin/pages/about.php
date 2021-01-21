<div>
    <h3 class="mt-4">Cheryl Bio</h3>
    <form method="post" action="" id="quill-form">
        <div id="editor1">
            <?php echo $page['section1']; ?>
        </div>

    <h3 class="mt-4">Alexis Bio</h3>
        <div id="editor2">
            <?php echo $page['section2']; ?>
        </div>
        <input type="hidden" name="section1" id="section1"/>
        <input type="hidden" name="section2" id="section2"/>
        <button type="submit" class="btn btn-sm btn-dark mt-4">Save</button>
    </form>
</div>

<script>
    scripts.push(function () {
        $(document).ready(function () {
            var quill1 = new Quill('#editor1', {
                theme: 'snow'
            });
            var quill2 = new Quill('#editor2', {
                theme: 'snow'
            });
            $("#quill-form").on("submit", function () {
                var html1 = quill1.root.innerHTML;
                var html2 = quill2.root.innerHTML;
                $("#section1").val(html1);
                $("#section2").val(html2);
            });
        });
    });
</script>