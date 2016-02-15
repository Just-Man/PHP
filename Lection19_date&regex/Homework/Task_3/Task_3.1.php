<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 13.02.16
 * Time: 09:52 PM
 */
/*
Task 3. Напишете и тествайте с PHP код регулярни изрази, които
мачват:
        1. Всички думи, в които се съдържа “is”
*/

require_once '../My_library.php';

$text = '';
$result = '';

if ($_POST) {
    $text = getValue($_POST, 'text');
    preg_match_all('/\s[a-z]*is[a-z]*\s/', $text, $matches);

    $result = implode(", ", $matches[0]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../vendor/twbs/bootstrap/dist/css/bootstrap-theme.css">
    <link rel="stylesheet" href="../css/style.css">

    <script src="../vendor/components/jquery/jquery.min.js"></script>
    <script src='http://cdn.tinymce.com/4/tinymce.min.js'></script>

    <title>Task 3.1</title>

</head>
<body class="container-fluid">
<main class="panel">
    <form class="form-horizontal" method="post">
        <label for="text">Add your text</label>
        <textarea id="text" name="text"><?= $text ?></textarea>
        <button type="submit" class="btn-default btn btn-lg">Check</button>
    </form>
    <br>
    <p>Finds words are: <?= $result ?></p>
</main>
</body>
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
</html>

