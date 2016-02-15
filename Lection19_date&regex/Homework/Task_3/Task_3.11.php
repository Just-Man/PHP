<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 14.02.16
 * Time: 11:14
 */

/*
Task 3. Напишете и тествайте с PHP код регулярни изрази, които
мачват:
       10. Всички мейли в gmail
*/

/*
    Test Example

    g.tadasdada85@gmail.com
    vsatadadsda@gmail.com
    teas-teastov@gmail.com
    vasil_asdsf@gmail.com
    prettyandsimple@gmail.com
    very.common@gmail.com
    disposable.style.email.with+symbol@gmail.com
    other.email-with-dash@gmail.com
    "much.more unusual"@gmail.com
    "very.unusual.@.unusual.com"@gmail.com
    "very.(),:;<>[]\".VERY.\"very@\\ \"very\".unusual"@gmail.com
    #!$%&'*+-/=?^_`{}|~@gmail.com
    "()<>[]:,;@\\\"!#$%&'*+-/=?^_`{}| ~.a"@gmail.com
    " "@gmail.com
*/

require_once '../My_library.php';

$text = '';
$result = '';

if ($_POST) {
    $text = getValue($_POST, 'text');
    preg_match_all('/\s?([[:alnum:]!#$%&\'"@:;*+-\/\=?^_`)(|}{~\s]*@gmail.com|[[:alnum:]!#$%&\'"@:;*+-\/\=?^_`)(|}{~\s]*@yahoo.com|[[:alnum:]!#$%&\'"@:;*+-\/\=?^_`)(|}{~\s]*@abv.bg)\s?/i', $text, $matches);
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

    <title>Task 3.10</title>

</head>
<body class="container-fluid">
<main class="panel">
    <form class="form-horizontal" method="post">
        <label for="text">Add your text</label>
        <textarea id="text" name="text"><?= $text ?></textarea>
        <button type="submit" class="btn-default btn btn-lg">Check</button>
    </form>
    <br>
    <strong>All valid e-mails in gmail.com,yahoo.com & abv.bg:</strong>
    <ol id="mails">
        <li><?= $result ?></li>
    </ol>
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

