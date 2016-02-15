<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 14.02.16
 * Time: 11:06
 */

/*
Task 3. Напишете и тествайте с PHP код регулярни изрази, които
мачват:
       9. Всички коли с СТ регистрация
*/

require_once '../My_library.php';

$text = '';
$result = '';

if ($_POST) {
    $text = getValue($_POST, 'text');
    preg_match_all('/\s?(CT\s?\d{4}\s?[a-z]{0,2})\s?/i', $text, $matches);
    var_dump($matches);
    $result = implode("</li><li>", $matches[1]);
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

    <title>Task 3.9</title>

</head>
<body class="container-fluid">
<main class="panel">
    <form class="form-horizontal" method="post">
        <label for="text">Add your text</label>
        <textarea id="text" name="text"><?= $text ?></textarea>
        <button type="submit" class="btn-default btn btn-lg">Check</button>
    </form>
    <br>
    <strong>All cars:</strong>
    <ul id="result">
        <li><?= $result ?></li>
    </ul>
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

