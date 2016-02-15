<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 12.02.16
 * Time: 10:25 PM
 */
/*
Task 3. Напишете и тествайте с PHP код регулярни изрази, които
мачват:
       5. Валиден български GSM номер
*/

require_once '../My_library.php';

$text = '';
$result = '';

if ($_POST) {
    $text = getValue($_POST, 'text');
    preg_match_all('/\+359\d{9,9}\s|0\d{9,9}\s/', $text, $matches);
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

    <title>Task 3.5</title>

</head>
<body class="container-fluid">
<main class="panel">
    <form class="form-horizontal" method="post">
        <label for="text">Add your text</label>
        <textarea id="text" name="text"><?= $text ?></textarea>
        <button type="submit" class="btn-default btn btn-lg">Check</button>
    </form>
    <br>
    <p>Valid number is: <?= $result ?></p>
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

