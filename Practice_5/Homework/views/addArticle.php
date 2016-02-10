<?php

if ($_POST) {
    if (isset($_POST['newCategory'])) {
        $categories->insert($_POST['newCategory']);
        header('Location: addArticle.php');
        die;
    } else {
        $articles->insert($_POST);
    }
}
?>
<section>
    <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
    </script>
    <form method="post" action="addArticle.php">
        <label for="category">Select Category</label>
        <div id="selectCategory" class="form-group">
            <select id="category" class="form-control input-lg" name="category">
                <option value="">Select</option>
                <?php foreach ($category as $key => $item) {
                    echo "<option value=\"$key\">$item</option>";
                } ?>
            </select>
            <a href="#" class="btn btn-lg btn-default" data-toggle="modal" data-target="#t_and_c_m">Add Category</a>
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" class="form-control input-lg" name="articleTitle">
        </div>
        <label for="article">Add Article</label>
        <textarea id="article" name="articleContent"></textarea>
        <div class="form-group">
            <input type="hidden" value="<?= date('H:i:s d.m.Y'); ?>" name="date">
            <button type="submit" class="btn btn-primary btn-lg">Save</button>
        </div>
    </form>
    <!-- Modal -->
    <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
                </div>
                <div class="modal-body">
                    <form action="addArticle.php" method="post"><label for="newCategory">Name of category</label><input
                            type="text" id="newCategory" class="input-lg form-control" name="newCategory">
                        <button type="submit" class="btn btn-lg btn-default">Add</button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</section>