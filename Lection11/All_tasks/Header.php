<?php session_start();
$logged = $_SESSION['logged'];
?>
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Style.css">
    </head>
    <body class="clearFix">
        <header class="clearFix">
            <!--
            <div class="right">
                <ul>
                    <li>Georgi</li>
                    <li>Staykov</li>
                    <li>5</li>
                    <li>Web 3</li>
                    <li><a href="index.php">Link</a> </li>
                    <li>justaman_85</li>
                </ul>
            </div>
            <div class="left">
                <ul>
                    <li>First Name</li>
                    <li>Second Name</li>
                    <li>Season</li>
                    <li>Group</li>
                    <li>Page</li>
                    <li>Skype</li>
                </ul>
            </div>
            -->
        </header>
        <nav>
            <ul>
                <li><a href="<?php if ($_SESSION['logged']){echo 'index.php';} else {echo 'index.php';}?>">Home</a></li>
                <li><a href="<?php if ($_SESSION['logged']){echo 'about_me.php';} else {echo 'index.php';}?>">About me</a></li>
                <li><a href="<?php if ($_SESSION['logged']){echo 'skills.php';} else {echo 'index.php';}?>">Skills</a></li>
                <li><a href="<?php if ($_SESSION['logged']){echo 'contact.php';} else {echo 'index.php';}?>">Contacts</a></li>
                <li><a href="<?php if ($_SESSION['logged']){echo 'gallery.php';} else {echo 'index.php';}?>">Gallery</a></li>
                <li><a href="<?php if ($_SESSION['logged']){echo 'color_game.php';} else {echo 'index.php';}?>">Color game</a></li>
            </ul>
        </nav>
    <section>
