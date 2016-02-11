<?php

/**
 * Created by PhpStorm.
 * User: just
 * Date: 04.02.16
 * Time: 09:37
 */

session_start();

require_once '../../php_errors.php';

$articles = new \HttpStub\Storage\FileStorage('articles');

$article = $articles->readAll();

$categories = new \HttpStub\Storage\FileStorage('category');

$category = $categories->readAll();



function printData($data, $category = null, $reversed = false)
{
    if ($reversed) {
        $data = array_reverse($data);
    }
    foreach ($data as $key => $item) {
        $len = count($data);
        $index = $len - $key;
        if (is_array($item)) {
            if (count($item)) {
                $categoryName = $category[$item['category']];
                $html = '<ul class="printData list-group">
                            <li class="list-group-item  %s">
                                <a href="category.php?key=%d">Category >  %s</a>
                            </li>
                            <li class="list-group-item ">
                                <a href="article.php?key=%d ">
                                    <h4> %s</h4>
                                </a>
                            </li>
                            <li class="list-group-item" id="articlePreview"> %s </li>
                            <li class="list-group-item date">Published time: %s </li>
                        </ul>';
                print sprintf($html, $categoryName, $item['category'], $categoryName, $index, $item['articleTitle'], $item['articleContent'], $item['date']);
            }
        } else {
            print '<li class="list-group-item"><a href="category.php?key=' . $key . '">' . $item . '</a></li>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/style.css">

    <script src='http://cdn.tinymce.com/4/tinymce.min.js'></script>

    <script type="text/javascript" src="../../jquery-2.2.0.min.js"></script>
    <script type="text/javascript" src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <title>Blog Homework</title>
</head>
<body>
<main>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <ul class="nav navbar-nav">
                    <li <?php if (PHP_SELF == 'index.php') : ?> class="active" <?php endif; ?>>
                        <a class="navbar-brand navbar-header  <?php if (PHP_SELF == 'addArticle.php') : ?> active <?php endif; ?>"
                           href="index.php">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Categories <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php printData($category) ?>
                        </ul>
                    </li>
                    <li class="hide <?php if (PHP_SELF == 'addArticle.php') : ?> active <?php endif; ?><?php if ($_SESSION['logged']) {
                        echo 'show';
                    } ?>"><a
                            href="addArticle.php" id="addArticle">Add Article</a></li>
                </ul>
                <!--<form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>-->
            </div><!-- /.navbar-collapse -->
            <p id="welcome"
               class="navbar-brand navbar-right hide <?php if ($_SESSION['logged']): ?>show <?php endif; ?>"><span>Welcome </span><?= getValue($_SESSION, 'username') ?>
            </p>
            <a class="btn btn-default navbar-btn navbar-right <?php if (getValue($_SESSION, 'logged')) {
                echo 'hide';
            } ?>" href="sing.php">Sign in</a>
        </div><!-- /.container-fluid -->
    </nav>
    <div id="content">
        <aside class="nav-sidebar">
            <ul class="nav-sidebar list-group">
                <h1>Categories</h1>
                <?php printData($category) ?>
            </ul>
        </aside>